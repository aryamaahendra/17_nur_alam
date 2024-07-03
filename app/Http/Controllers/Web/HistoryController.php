<?php

namespace App\Http\Controllers\Web;

use App\Datatables\HistoryPrediction\DTHistoryPrediction;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HistoryController extends Controller
{
    public function prediction(): View
    {
        return view('history.prediction');
    }

    public function prediction_data(DTHistoryPrediction $data): JsonResponse
    {
        return response()->json($data->json());
    }

    public function training(): View
    {
        return view('history.training');
    }

    public function training_data($data): JsonResponse
    {
        return response()->json($data->json());
    }
}
