<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Dataset;
use App\Models\History;
use App\Models\HistoryAnswer;
use App\Models\People;
use App\Models\Question;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Phpml\Classification\NaiveBayes;
use Phpml\Metric\Accuracy;
use Phpml\Metric\ClassificationReport;
use Phpml\Metric\ConfusionMatrix;
use Illuminate\Support\Str;

class MetodeController extends Controller
{
    public function naivebayes(): View
    {
        $questions = Question::all();
        $peoples = People::all();
        return view('metode.niave-bayes', compact('questions', 'peoples'));
    }

    public function naivebayes_predict(Request $request): RedirectResponse
    {
        $inputs = $request->validate([
            'question' => 'required|array',
            'question.*' => 'required|boolean',
            'people_id' => 'required|numeric'
        ]);

        $model = Cache::get('naivebayes_model');
        $answers = Arr::map($inputs['question'], fn ($value, $key) => (int) $value);
        $result =  $model->predict(array_values($answers));

        DB::transaction(function () use ($inputs, $result) {
            $history = History::create([
                ...Arr::except($inputs, 'question'),
                'class' =>  $result
            ]);

            foreach ($inputs['question'] as $key => $value) {
                HistoryAnswer::create([
                    'question_id' => $key,
                    'history_id' => $history->id,
                    'value' => $value,
                ]);
            }

            return $history;
        });

        return redirect()->route('dshb.metode.naivebayes')
            ->with(['new_class' => $result]);
    }

    public function naivebayes_proses(): RedirectResponse
    {
        Cache::forget('naivebayes_model');

        $datasets = Dataset::with(['answers'])->get();
        $samples = [];
        $labels = [];

        foreach ($datasets as $dataset) {
            array_push($samples, $dataset->answers->pluck('value')->toArray());
            array_push($labels, $dataset->class);
        }

        $classifier = new NaiveBayes();
        $classifier->train($samples, $labels);

        Cache::rememberForever('naivebayes_model', fn () => $classifier);

        return redirect()->route('dshb.metode.naivebayes')
            ->with($this->flashMessage(false, 'training naive bayes berhasil'));
    }

    public function confusionmatrix(): View
    {
        $cm = Cache::get('cm_main');
        $report = Cache::get('cm_report');
        $accuracy = Cache::get('cm_accuracy');

        return view('metode.confusion-matrix', compact('cm', 'report', 'accuracy'));
    }

    public function confusionmatrix_proses(): RedirectResponse
    {
        Cache::forget('cm_main');
        Cache::forget('cm_report');
        Cache::forget('cm_accuracy');

        $model = Cache::get('naivebayes_model');
        if (!$model) {
            return redirect()->route('dshb.metode.confusionmatrix')
                ->with($this->flashMessage(true, 'silahkan train naive baive'));
        }

        $datasets = Dataset::with(['answers'])->get();
        $actual = [];
        $predicted = [];

        foreach ($datasets as $dataset) {
            $answers = $dataset->answers->pluck('value')->toArray();
            array_push($actual, (int) $dataset->class);
            array_push($predicted, $model->predict($answers));
        }

        $confusionMatrix = ConfusionMatrix::compute($actual, $predicted, [0, 1]);
        $report = new ClassificationReport($actual, $predicted);

        Cache::rememberForever('cm_main', fn () => $confusionMatrix);
        Cache::rememberForever('cm_report', fn () => $report);
        Cache::rememberForever('cm_accuracy', fn () => Accuracy::score($actual, $predicted));

        return redirect()->route('dshb.metode.confusionmatrix')
            ->with($this->flashMessage(false, 'training naive bayes berhasil'));
    }
}
