<?php

namespace App\Http\Requests\User;

use App\Http\Requests\Fulfillable;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class DeleteUser extends FormRequest implements Fulfillable
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [];
    }

    public function fulfillable(): mixed
    {
        $user = $this->route('m_user');
        return DB::transaction(fn () => $user->delete());
    }
}
