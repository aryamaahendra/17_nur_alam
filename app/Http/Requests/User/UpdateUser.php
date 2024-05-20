<?php

namespace App\Http\Requests\User;

use App\Http\Requests\Fulfillable;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UpdateUser extends FormRequest implements Fulfillable
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
        return [
            'name' => ['required', 'string', 'max:64'],
            'username' => ['required', 'string', 'max:32'],
            'email' => ['required', 'email', 'max:32', Rule::unique('users', 'email')],
        ];
    }

    public function fulfillable(): mixed
    {
        $inputs = $this->validated();
        $user = $this->route('m_user');

        return DB::transaction(fn () => $user->update($inputs));
    }
}
