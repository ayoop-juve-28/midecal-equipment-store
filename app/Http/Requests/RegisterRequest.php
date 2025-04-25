<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string></string>, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            //'image' => 'required|image|mimes:jpg,jpeg,png,gif',
        ];
    }
    public function messages()
    {
                return ['name.required' => 'الاسم مطلوب.',
        'name.string' => 'الاسم يجب أن يكون نصًا.',
        'name.max' => 'الاسم يجب ألا يتجاوز 255 حرفًا.',

        'email.required' => 'البريد الإلكتروني مطلوب.',
        'email.email' => 'صيغة البريد الإلكتروني غير صحيحة.',
        'email.unique' => 'هذا البريد الإلكتروني مسجل بالفعل.',

        'password.required' => 'كلمة المرور مطلوبة.',
        'password.string' => 'كلمة المرور يجب أن تكون نصًا.',
        'password.min' => 'كلمة المرور يجب أن تكون على الأقل 8 أحرف.',
        //'password.confirmed' => 'تأكيد كلمة المرور غير مطابق.',

       // 'image.required' => 'الصورة مطلوبة.',
     //   'image.image' => 'الملف يجب أن يكون صورة.',
     //   'image.mimes' => 'يجب أن تكون الصورة بصيغة: jpg أو jpeg أو png أو gif.',
      //  'image.max' => 'حجم الصورة يجب ألا يتجاوز 2 ميغابايت.',


        ];
    }


}

