<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use App\upload;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = Customer::all();
        return view('Admin.Manager.ManagerAccount.index',compact("user"));
    }
    public function show($id)
    {

        $customer = Customer::findOrfail($id);
        $upload = upload::where("customer_id", $customer->id)->get();
        return view("Admin.Manager.ManagerAccount.show", compact("customer", "upload"));


    }
    public function showChanger(){
        $customer = Customer::all();
        return view("Admin.Manager.ManagerAccount.chang",compact("customer"));
    }
    public function grantRight($id){
        $data = Customer::findOrfail($id);
        return view("Admin.Manager.ManagerAccount.AccountStatus",compact("data"));
    }
}
