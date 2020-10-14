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
        return [
            "tenchuhan" => "required  | min:3",
            "tenphienam" =>  "required  | min:3",
            "diachinha" => "required | max:255",
            "sodienthoaicodinh" => "min:10| max:11",
            "sodienthoaididong" => "min:10| max:11",
            "password" => "min:3",
            "email" => "required",
            "linkweb"=>"required",
            "truso"=>"required",
            "sdtcty"=>"required",
            "songuoilam"=>"required",
            "chucvu"=>"required",
            "namcongtac"=>"required",
            "thoigianlamviec"=>"required",
            "thoigiannghi"=>"required",
            "nguoibaolanh"=>"required",
            "diachinguoibaolanh"=>"required",
            "sdtnguoibaolanh"=>"required",
        ];
    }
    public function messages()
    {
        return [
            'tenchuhan.required' => __('Bạn chưa nhập Username.'),
            'tenchuhan.min' => __('Ong than Phai Nhap TREN 3 KY TU.'),
            'tenphienam.required' => __('Bạn chưa nhập Username.'),
            'tenphienam.min' => __('Ong than Phai Nhap TREN 3 KY TU.'),
            'diachinha.required' => __('Bạn chưa nhập Username'),
            'diachinha.min' => __('Ong than Phai Nhap TREN 3 KY TU.'),
            'sodienthoaicodinh.required' => __('Bạn chưa nhập Username'),
            'sodienthoaididong.required' => __('Bạn chưa nhập Username'),
            'matkhau.required' => __('Bạn chưa nhập Username'),
            'email.required' => __('Bạn chưa nhập Username'),
            'linkweb.required' => __('Bạn chưa nhập Username'),
            'truso.required' => __('Bạn chưa nhập Username'),
            'sdtcty.required' => __('Bạn chưa nhập Username'),
            'songuoilam.required' => __('Bạn chưa nhập Username'),
            'chucvu.required' => __('Bạn chưa nhập Username'),
            'namcongtac.required' => __('Bạn chưa nhập Username'),
            'thoigianlamviec.required' => __('Bạn chưa nhập Username'),
            'nguoibaolanh.required' => __('Bạn chưa nhập Username'),
            'thoigiannghi.required' => __('Bạn chưa nhập Username'),
            'diachinguoibaolanh.required' => __('Bạn chưa nhập Username'),
            'sdtnguoibaolanh.required' => __('Bạn chưa nhập Username'),
        ];
    }
}
