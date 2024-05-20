<?php

namespace App\Datatables\User;

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
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'created_at' => Carbon::create($this->created_at)->diffForHumans(),
            'actions' => [
                'update' => true,
                'delete' => true,
            ],
        ];
    }
}
