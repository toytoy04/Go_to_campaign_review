<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|string|email',
            'covid_document' => 'required|numeric',
        ];
    }

    public function attributes()
    {
        return [
            'name' => '申込者名',
            'phone_number' => '連絡先',
            'email' => 'メールアドレス',
            'covid_document' => '証明書',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attributeを入力してください。',
        ];
    }
}
