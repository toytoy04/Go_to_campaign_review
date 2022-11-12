<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TravelRequest extends FormRequest
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
            'application_date' => 'required|date',
            'departure_date' => 'required|date',
            'day' => 'required|string',
            'people' => 'required|numeric',
            'region_id' => 'required|numeric',
            'cost' => 'required|numeric',
            'customer_id' => 'required|numeric',
            'subsidy' => 'required|numeric',
            'coupon' => 'required|numeric',
        ];
    }

    public function attributes()
    {
        return [
            'application_date' => '申込日',
            'departure_date' => '出発日',
            'day' => '旅行日数',
            'people' => '人数',
            'region_id' => '地域',
            'cost' => '総額',
            'customer_id' => '旅行者ID',
            'subsidy' => '補助金額',
            'coupon' => 'クーポン枚数',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attributeを入力してください。',
            'date' => '日付を入力してください。' ,
            'numeric' => '数字を入力してください。',
        ];
    }
}
