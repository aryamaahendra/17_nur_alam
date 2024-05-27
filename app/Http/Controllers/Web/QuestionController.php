<?php

namespace App\Http\Controllers\Web;

use App\Datatables\Question\DTQuestion;
use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('question.index');
    }

    /**
     * Data for data tables
     */
    public function data(DTQuestion $data): JsonResponse
    {
        return response()->json($data->json());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('question.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:1024'
        ]);

        DB::transaction(fn () => Question::create($validated));

        return redirect()->route('dshb.question.index')
            ->with($this->flashMessage(false, 'pertanyaan berhasil dibuat'));
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
    public function edit(Request $request): View
    {
        $question = $request->route('m_question');
        return view('question.update', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $question = $request->route('m_question');

        $validated = $request->validate([
            'question' => 'required|string|max:1024'
        ]);

        DB::transaction(fn () => $question->update($validated));

        return redirect()->route('dshb.question.index')
            ->with($this->flashMessage(false, 'pertanyaan berhasil diubah'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $question = $request->route('m_question');

        DB::transaction(fn () => $question->delete());

        return redirect()->route('dshb.question.index')
            ->with($this->flashMessage(false, 'pertanyaan berhasil dihapus'));
    }
}
