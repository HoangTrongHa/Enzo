<?php

namespace App\Http\Controllers\Customer;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRegister;
use App\upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class CustomerController extends Controller
{
    public function index()
    {
        return view("Customer.index");
    }

    public function Register()
    {
        return view("Customer.register");
    }

    public function PostRegister(CustomerRegister $request)
    {

        $sinhnhat = $request->birth_year + $request->birth_month + $request->birth_day;
        $cus = Customer::create([
            "tenchuhan" => $request->tenchuhan,
            "tenphienam" => $request->tenphienam,
            "male" => $request->male,
            "sinhnhat" => $sinhnhat,
            "thanhphangiadinh" => $request->thanhphangiadinh,
            "diachinha" => $request->diachinha,
            "sodienthoaicodinh" => $request->sodienthoaicodinh,
            "sodienthoaididong" => $request->sodienthoaididong,
            "email" => $request->email,
            "linkweb" => $request->linkweb,
            "truso" => $request->truso,
            "sdtcty" => $request->sdtcty,
            "songuoilam" => $request->songuoilam,
            "chucvu" => $request->chucvu,
            "namcongtac" => $request->namcongtac,
            "thoigianlamviec" => $request->thoigianlamviec,
            "thoigiannghi" => $request->thoigiannghi,
            "nguoibaolanh" => $request->nguoibaolanh,
            "diachinguoibaolanh" => $request->diachinguoibaolanh,
            "sdtnguoibaolanh" => $request->sdtnguoibaolanh,
            'password' => Hash::make($request['password']),
        ]);
        if ($cus) {
            return redirect()->route("login")->with("success", "Sign Up Success...");
        }
        return redirect()->back()->with("error", "Registration failed...");
    }
    public function application()
    {
        $static =Auth::guard("Customer")->user();
        if ($static->static == 2) {
            return view("Customer.loan",compact("static"));
        } else {
            return view("Customer.application");
        }

    }
    public function upload(Request $request){
        if ($request->hasFile("avatar")||$request->hasFile('front') || $request->hasFile("idnhanhvien")
        || $request->hasFile("sotietkiem") || $request->hasFile("3thangluong") || $request->hasFile("nhieuanh")) {
            $extension1 = $request->file('front')->getClientOriginalExtension();
            $name1 = sha1(10);
            $file1 = Storage::disk()->put('front/',  $request->file("front"));

            $extension2 = $request->file('back')->getClientOriginalExtension();
            $name2 = sha1(10);
            $file2 = Storage::disk()->put('back/',  $request->file("back"));

            $extension3 = $request->file('idnhanhvien')->getClientOriginalExtension();
            $name3 = sha1(10);
            $file3 = Storage::disk()->put('idnhanhvien/',  $request->file("idnhanhvien"));

            $extension4 = $request->file('sotietkiem')->getClientOriginalExtension();
            $name4 = sha1(10);
            $file4 = Storage::disk()->put('sotietkiem/',  $request->file("sotietkiem"));

            $extension5 = $request->file('3thangluong')->getClientOriginalExtension();
            $name5 = sha1(10);
            $file5 = Storage::disk()->put('3thangluong/',  $request->file("3thangluong"));

            $extension6 = $request->file('nhieuanh')->getClientOriginalExtension();
            $name6 = sha1(10);
            $file6 = Storage::disk()->put('nhieuanh/',  $request->file("nhieuanh"));

            $extension7 = $request->file('avatar')->getClientOriginalExtension();
            $name7 = sha1(10);
            $file7 = Storage::disk()->put('avatar/',  $request->file("avatar"));

        }
//        dd($request->customer_id);
        $upload = upload::create([

            'avatar' => isset($file7) ? $file7 : null,
            'Front' => isset($file1) ? $file1 : null,
            'Back' => isset($file2) ? $file2 : null,
            'idnhanhvien' => isset($file3) ? $file3 : null,
            'luong' => isset($file5) ? $file5 : null,
            'Biasotietkiem' => isset($file4) ? $file4 : null,
            'manypicture' => isset($file6) ? $file6 : null,
            "customer_id" => $request->customer_id

        ]);
        return view("Customer.confirm");
    }
    public function loan(){

        return view("Customer.loan",compact("cus"));
    }
    public function sinsei(){

        return view("Customer.sinsei");
    }
    public function postSinsei(){
        
    }

}
