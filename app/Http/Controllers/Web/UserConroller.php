<?php

namespace App\Http\Controllers\Web;

use App\Datatables\User\DTUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUser;
use App\Http\Requests\User\DeleteUser;
use App\Http\Requests\User\UpdateUser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserConroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('user.index');
    }

    /**
     * Data for data tables
     */
    public function data(DTUser $data): JsonResponse
    {
        return response()->json($data->json());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUser $request)
    {
        $request->fulfillable();

        return redirect()->route('dshb.user.index')
            ->with($this->flashMessage(false, 'user berhasil dibuat'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request): View
    {
        $user = $request->route('m_user');
        return view('user.update', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUser $request)
    {
        $request->fulfillable();

        return redirect()->route('dshb.user.index')
            ->with($this->flashMessage(false, 'user berhasil diubah'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeleteUser $request)
    {
        $request->fulfillable();

        return redirect()->route('dshb.user.index')
            ->with($this->flashMessage(false, 'user berhasil dihapus'));
    }
}
