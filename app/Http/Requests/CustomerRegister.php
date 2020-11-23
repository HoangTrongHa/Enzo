<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRegister extends FormRequest
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
        $a = 1;
        return [
            "tenchuhan" => "required  | min:3",

            "tenphienam" => "required  | min:3",

            "male" => "required",

            "diachinha" => "required | max:255",


            "sodienthoaididong" => "min:3| max:15  | required",

            "electricmail" => "required | max:50 |required_with:electricmail-confirm|same:electricmail-confirm",

            "electricmail-confirm" => "required | max:50",

            "email" => "required |max:50 |required_with:email-confirm|same:email-confirm",
            "email-confirm" => "required | max:50",

            "password" => "required |max:50 |required_with:password-confirm|same:password-confirm",
            "password-confirm" => "required | max:50",

            "truso" => "required",
            "head_office_address" => "required",

            "sdtcty" => "required",

            "nguoibaolanh" => "required",

            "diachinguoibaolanh" => "required",
            "sdtnguoibaolanh" => "required",
            "checkbox" => "required"
        ];
    }

    public function messages()
    {
        return [
            'tenchuhan.required' => __('漢字名を入力していません.'),
            'tenchuhan.min' => __('名前は短すぎる.'),
            'tenphienam.required' => __('漢字名を入力していません.'),
            'tenphienam.min' => __('名前は短すぎる.'),
            'male.required' => __('見逃してはいけません.'),

            'diachinha.required' => __('見逃してはいけません'),
            'diachinha.max' => __('長すぎる.'),


            'sodienthoaididong.required' => __('見逃してはいけません.'),
            'sodienthoaididong.min' => __('短すぎる.'),
            'sodienthoaididong.max' => __('短すぎる.'),

            'electricmail.required' => __('見逃してはいけません.'),
            'electricmail.max' => __('短すぎる.'),

            'electricmail-confirm' => __('見逃してはいけません.'),
            'electricmail-confirm.max' => __('短すぎる.'),

            'email.required' => __('見逃してはいけません.'),
            'email.max' => __('短すぎる.'),

            'email-confirm' => __('見逃してはいけません.'),
            'email-confirm.max' => __('短すぎる.'),

            'password.required' => __('見逃してはいけません.'),
            'password.max' => __('短すぎる.'),

            'password-confirm' => __('見逃してはいけません.'),
            'password-confirm.max' => __('短すぎる.'),

            'truso.required' => __('見逃してはいけません.'),
            'head_office_address.required' => __('見逃してはいけません.'),
            'nguoibaolanh.required' => __('見逃してはいけません.'),
            'sdtcty.required' => __('見逃してはいけません.'),

            'diachinguoibaolanh.required' => __('見逃してはいけません.'),
            'sdtnguoibaolanh.required' => __('見逃してはいけません.'),
            'checkbox.required' => __('新しい振動アカウントを受け入れることができます登録できます'),
        ];
    }
}
