<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterLoan extends FormRequest
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
            'loancus' => 'required',
            'checkbox'=> 'required'
        ];
    }
    public function messages()
    {
        return [
            'loancus.required' => '空白のままにしないでください',
            'checkbox.required' =>'空白のままにしないでください'
        ];
    }
}
