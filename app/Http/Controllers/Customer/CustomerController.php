<?php

namespace App\Http\Controllers\Customer;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view("Customer.index");
    }
    public function loginCustomer(){
        return view("Customer.login");
    }
    public function Register(){
        return view("Customer.register");
    }
    public function PostRegister(Request $request){
        $request->validate([
            "customer_name"=>"required|min:3",
            "email"=>"required|unique:customers",
            "password"=>"required|min:6",
            "password_cf"=>"same:password"
        ]);
        $cus = Customer::create([
            "customer_name"=>$request->customer_name,
            "email"=>$request->email,
            "password"=>bcrypt($request->password)
        ]);
        if ($cus)
        {
            return redirect()->route("customer.login")->with("success","Sign Up Success...");
        }
        return redirect()->back()->with("error","Registration failed...");
    }
}
