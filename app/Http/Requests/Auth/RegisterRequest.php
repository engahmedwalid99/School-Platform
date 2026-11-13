<?php

namespace App\Http\Requests\Auth;

use Illuminate\Contracts\Validation\ValidationRule;
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'min:3',
                'max:20',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email',
            ],

            'password' => [
                'required',
                'min:5'
            ],
        ];
    }

    public function messages()
    {
        return ([
            'name.required' => 'اكتب اسمك يا كبدس.',
            'name.string' => 'الاسم لازم يكون نص.',
            'name.min' => 'اسمك قصير اوي، اكتبلنا اسم محترم.',
            'name.max' => 'الاسم طويل زيادة عن اللزوم.',

            'email.required' => 'البريد الالكتروني مطلوب.',
            'email.email' => 'اكتب بريد الكتروني صحيح.',
            'email.max' => 'البريد الالكتروني طويل جدا.',
            'email.unique' => 'الايميل ده مسجل قبل كده، انت راجع تاني؟',

            'password.required' => 'كلمة المرور مطلوبة.',
            'password.min' => 'الباسوورد ي كبدي لازم يبقي اكتر من 5',
        ]);
    }
}
