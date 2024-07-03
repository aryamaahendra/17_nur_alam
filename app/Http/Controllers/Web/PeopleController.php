<?php

namespace App\Http\Controllers\Web;

use App\Datatables\People\DTPeople;
use App\Http\Controllers\Controller;
use App\Models\People;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('people.index');
    }

    /**
     * Data for data tables
     */
    public function data(DTPeople $data): JsonResponse
    {
        return response()->json($data->json());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('people.create');
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:64',
            'sex' => 'required|string|in:male,female',
            'birth_place' => 'required|string|max:64',
            'birth_date' => 'required|date',
            'criminal_act' => 'required|string|max:64',
            'sentence' => 'required|numeric|min:1',
            'residivisme' => 'required|numeric|min:1',
        ];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate($this->rules());

        DB::transaction(fn () => People::create($validated));

        return redirect()->route('dshb.people.index')
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
    public function edit(Request $request)
    {
        $people = $request->route('m_people');
        return view('people.update', compact('people'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate($this->rules());
        $people = $request->route('m_people');

        DB::transaction(fn () => $people->update($validated));

        return redirect()->route('dshb.people.index')
            ->with($this->flashMessage(false, 'pertanyaan berhasil diupdate'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $people = $request->route('m_people');

        DB::transaction(fn () => $people->delete());

        return redirect()->route('dshb.people.index')
            ->with($this->flashMessage(false, 'pertanyaan berhasil dihapus'));
    }
}
