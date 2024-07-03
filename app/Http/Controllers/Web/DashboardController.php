<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\History;
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
                ['class' => '1', 'count' => History::where('class', 1)->count('id')],
                ['class' => '0', 'count' => History::where('class', 0)->count('id')],
            ]
        ]);
    }
}
