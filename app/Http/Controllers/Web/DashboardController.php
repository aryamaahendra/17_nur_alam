<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('dashboard');
    }

    public function data(): JsonResponse
    {
        return response()->json([
            'error' => false,
            'data' => [
                ['class' => '01', 'count' => 100,],
                ['class' => '02', 'count' => 120,],
            ]
        ]);
    }
}
