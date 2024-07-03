<?php

namespace App\Datatables\People;

use App\Supports\Role;
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
            'name' => $this->name,
            'sex' => $this->sex,
            'birth' => $this->birth_place . $birthDate,
            'sentence' => $this->sentence,
            'created_at' => Carbon::create($this->created_at)->diffForHumans(),
            'actions' => [
                'update' => true,
                'delete' => true,
            ],
        ];
    }
}
