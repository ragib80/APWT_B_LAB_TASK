<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
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
            'full_name'=>'required|max:30 |min:3',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i|min:10|max:50',
            'password'=>'required|max:20|min:8|alpha_num| required_with:cpassword|same:cpassword',
            'cpassword'=>'required|max:20|min:8|alpha_num',
            'phone'=>'required|max:15 |min:11',
            'city'=>'required|max:20 |min:3',
            'country'=>'required|max:20 |min:3',
            'company'=>'required|max:20 |min:3',
        ];
    }

    public function messages()
    {
        return [
            'email.regex' => 'email must be contain @',
            'email.max' => 'Email length should be maximum 50 chararcters',
            'password.max' => 'Password at maximum 20 characters',
            'password.regex' => 'password should be alphanumeric',

        ];
    }
}