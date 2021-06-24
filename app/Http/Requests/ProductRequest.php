<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'fullname' => 'required|between :3,30|regex:/^[a-zA-Z\s]+$/',
            'address' => 'required|regex:/[a-zA-Z0-9\s]+/|between :3,50',
            'phone' => 'required|digits_between :11,15|numeric',
            'productname' => 'required|between :3,30|regex:/^[a-zA-Z\s]+$/',
            'unitprice' => 'required|alpha_num|min:0',
            'quantity'  => 'required|alpha_num|between :1,20',
            'totalprice' => 'required|alpha_num|min:0',

        ];
    }

    public function messages()
    {
        return [];
    }
}