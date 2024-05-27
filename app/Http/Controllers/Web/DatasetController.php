<?php

namespace App\Http\Controllers\Web;

use App\Datatables\Dataset\DTDataset;
use App\Http\Controllers\Controller;
use App\Models\Dataset;
use App\Models\DatasetAnswer;
use App\Models\Question;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class DatasetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('dataset.index');
    }

    /**
     * Data for data tables
     */
    public function data(DTDataset $data): JsonResponse
    {
        return response()->json($data->json());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $questions = Question::all(['id', 'question']);
        return view('dataset.create', compact('questions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs = $request->validate([
            'name' => 'required|string|max:64',
            'class' => 'required|string|max:24',
            'question' => 'required|array',
            'question.*' => 'required|boolean'
        ]);

        DB::transaction(function () use ($inputs) {
            $dataset = Dataset::create([
                ...Arr::except($inputs, 'question'), 'uuid' => Str::orderedUuid()
            ]);

            foreach ($inputs['question'] as $key => $value) {
                DatasetAnswer::create([
                    'question_id' => $key,
                    'dataset_id' => $dataset->id,
                    'value' => $value,
                ]);
            }

            return $dataset;
        });

        return redirect()->route('dshb.dataset.index')
            ->with($this->flashMessage(false, 'dataset berhasil dibuat'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $questions = Question::all(['id', 'question']);
        $dataset = $request->route('m_dataset');
        $dataset->load('answers');

        $answers = [];
        foreach ($dataset->answers as $item) {
            $answers[$item->question_id] = $item->value;
        }

        return view('dataset.update', compact('dataset', 'questions', 'answers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $dataset = $request->route('m_dataset');
        $inputs = $request->validate([
            'name' => 'required|string|max:64',
            'class' => 'required|string|max:24',
            'question' => 'required|array',
            'question.*' => 'required|boolean'
        ]);

        DB::transaction(function () use ($inputs, $dataset) {
            $dataset->load('answers');
            foreach ($dataset->answers as $answer) {
                $answer->update([
                    'value' => $inputs['question'][$answer->question_id]
                ]);
            }

            return $dataset->update(Arr::except($inputs, 'question'));
        });

        return redirect()->route('dshb.dataset.index')
            ->with($this->flashMessage(false, 'dataset berhasil diubah'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $dataset = $request->route('m_dataset');

        DB::transaction(function () use ($dataset) {
            $dataset->load('answers');
            foreach ($dataset->answers as $answer) {
                $answer->delete();
            }

            return $dataset->delete();
        });

        return redirect()->route('dshb.dataset.index')
            ->with($this->flashMessage(false, 'dataset berhasil dihapus'));
    }
}
