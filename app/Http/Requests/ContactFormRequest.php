<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'subject' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'subject.required' => '主題為必填。',
            'name.required' => '聯絡人名稱為必填。',
            'email.required' => 'Email 為必填。',
            'email.email' => '請輸入有效的 Email。',
            'message.required' => '詳細內容為必填。',
        ];
    }
}
