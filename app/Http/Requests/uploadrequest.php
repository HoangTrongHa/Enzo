<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class uploadrequest extends FormRequest
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
            "avatar"=>"required",
            "Front"=>"required",
            "idnhanhvien"=>"required",
            "Back"=>"required",
            "luong"=>"required",
            "Biasotietkiem"=>"required",
            "manypicture"=>"required"
        ];
    }
    public function messages()
    {
        return [
            'avatar.required' => __('漢字名を入力していません.'),
            'Front.required' => __('漢字名を入力していません.'),
            'idnhanhvien.required' => __('見逃してはいけません.'),
            'Back.required' => __('見逃してはいけません'),
            'luong.required' => __('見逃してはいけません'),
            'Biasotietkiem.required' => __('見逃してはいけません'),
            'manypicture.required' => __('見逃してはいけません')
        ];
    }
}
