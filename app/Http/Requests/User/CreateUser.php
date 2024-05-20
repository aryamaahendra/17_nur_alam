<?php

namespace App\Http\Requests\User;

use App\Actions\Fortify\PasswordValidationRules;
use App\Http\Requests\Fulfillable;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class CreateUser extends FormRequest implements Fulfillable
{
    use PasswordValidationRules;

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
            'password' => $this->passwordRules()
        ];
    }

    public function fulfillable(): mixed
    {
        $inputs = $this->validated();
        return DB::transaction(function () use ($inputs) {
            return User::create([
                ...$inputs,
                'password' => Hash::make($inputs['password'])
            ]);
        });
    }
}
