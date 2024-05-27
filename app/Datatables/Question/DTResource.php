<?php

namespace App\Datatables\Question;

use App\Supports\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DTResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'question' => $this->question,
            'created_at' => Carbon::create($this->created_at)->diffForHumans(),
            'actions' => [
                'update' => true,
                'delete' => true,
            ],
        ];
    }
}
