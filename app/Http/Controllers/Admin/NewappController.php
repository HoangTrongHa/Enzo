<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewappController extends Controller
{
    public function index(){
        $cus = Customer::where("static",1)->paginate(5);
        return view("Admin.newapp.index",compact("cus"));
    }
    public function show($id)
{
    $customer = Customer::FindOrFail($id);
//        $upload = upload::where("customerid",$customer )->get();
    return view("Admin.newapp.show", compact("customer"));
}
}
