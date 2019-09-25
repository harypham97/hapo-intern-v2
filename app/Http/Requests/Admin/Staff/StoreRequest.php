<?php

namespace App\Http\Requests\Admin\Staff;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|min:6',
            'name' => 'required|max:50',
            'dob' => 'required|date',
            'phone' => 'required|numeric|digits_between:10,15',
            'city' => 'required|max:50',
//            'department_id' => 'required|numeric',
            'avatar' => 'image'
        ];
    }
}