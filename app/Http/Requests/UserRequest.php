<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return match ($this->method()) {
            'POST' => $this->store(),
            'PUT' => $this->update(),
        };
    }

    public function store()
    {
        return [
            'name'     => ['required', 'string', 'min:2', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role_id'  => ['required']
        ];
    }

    public function update()
    {
        return [
            'name'     => ['required', 'string', 'min:2', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users,id,' . $this->user()->id],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
            'role_id'  => ['required']
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $response = redirect()
            ->back()
            ->withInput()
            ->with('error', 'Periksa kembali data yang anda inputkan.')
            ->withErrors($validator);

        throw (new ValidationException($validator, $response))
            ->errorBag($this->errorBag)
            ->redirectTo($this->getRedirectUrl());
    }
}
