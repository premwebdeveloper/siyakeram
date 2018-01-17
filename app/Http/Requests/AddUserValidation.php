<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserValidation extends FormRequest
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
            'name' => 'required',
            'phone' => 'required|max:10|min:10',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
            'date' => 'required',
            'month' => 'required',
            'year' => 'required',
            'religion' => 'required',
            'mother_tongue' => 'required',
            'gender' => 'required',
        ];
    }

    /*public function messages()
    {
        return [
            'name.required' => 'Name field can not be blank!',
        ];
    }*/
}
