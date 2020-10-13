<?php

namespace App\Http\Controllers\Customer;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:Customer')->except('logout');
    }

    public function loginCustomer()
    {
        return view("Customer.login");
    }

    public function index()
    {

        return view("Customer.index");

    }

    public function postLogin(Request $request)
    {
      $login = Auth::guard('Customer')->attempt(["email"=>$request->email,"matkhau"=>$request->matkhau]);
//        dd($login);
        if ($login){
            return redirect()->back();
        }
        return redirect()->back()->with("error","Login failed..");

    }
    public function Register()
    {
        return view("Customer.register");
    }

    public function PostRegister(CustomerRegister $request)
    {
//        $request->validate([
//            "customer_name"=>"required|min:3",
//            "email"=>"required|unique:customers",
//            "password"=>"required|min:6",
//            "password_cf"=>"same:password"
//        ]);

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
            'matkhau' => Hash::make($request['matkhau']),
        ]);
        if ($cus) {
            return redirect()->route("loginCustomer")->with("success", "Sign Up Success...");
        }
        return redirect()->back()->with("error", "Registration failed...");
    }
}
