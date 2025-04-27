<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ];
    }

    public function messages()
    {
                return [


        'email.required' => 'البريد الإلكتروني مطلوب.',
        'email.email' => 'صيغة البريد الإلكتروني غير صحيحة.',

        'password.required' => 'كلمة المرور مطلوبة.',
        'password.string' => 'كلمة المرور يجب أن تكون نصًا.',
        'password.min' => 'كلمة المرور يجب أن تكون على الأقل 8 أحرف.',

        ];
    }
}
