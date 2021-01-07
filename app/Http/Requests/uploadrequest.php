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
            'avatar.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "front"=>"required",
            'front.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'idnhanhvien.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "idnhanhvien"=>"required",

            "back"=>"required",
            'back.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sotietkiem.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "sotietkiem"=>"required",
            "3thangluong"=>"required",
            '3thangluong.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "filename"=>"required",
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'avatar.required' => __('見逃してはいけません.'),
            'front.required' => __('見逃してはいけません.'),
            'idnhanhvien.required' => __('見逃してはいけません.'),
            'back.required' => __('見逃してはいけません'),
            'sotietkiem.required' => __('見逃してはいけません'),
            '3thangluong.required' => __('見逃してはいけません'),
            'filename.required' => __('見逃してはいけません')
        ];
    }
}
