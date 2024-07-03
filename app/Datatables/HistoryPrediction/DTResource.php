<?php

namespace App\Datatables\HistoryPrediction;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DTResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $birthDate = Carbon::create($this->birth_date)->toFormattedDateString();

        return [
            'id' => $this->id,
            'class' => $this->class,
            'name' => $this->people->name,
            'sex' => $this->people->sex,
            'birth' => $this->people->birth_place . $birthDate,
            'sentence' => $this->people->sentence,
            'created_at' => Carbon::create($this->created_at)->diffForHumans(),
            'actions' => [
                'update' => true,
                'delete' => true,
            ],
        ];
    }
}
