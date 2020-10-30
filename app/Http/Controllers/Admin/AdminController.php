<?php

namespace App\Http\Controllers\Admin;
use App\Customer;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;



class AdminController extends Controller
{

    public function index()
    {
//        $request->user()->authorizeRoles(['employee', 'admin']);
        $Customer =Customer::all();
        $wait = $Customer->filter(function ($item) {
            return $item->static = 1;
        })->count();

        $countUser = $Customer->filter(function ($item1){
            return $item1->id;
        })->count();

        $Authorized = Customer::where("static" ,2)->get();
//        $ = Customer::where("static" ,)->get();

        return view('Admin.index',compact('wait','countUser','Authorized',"Customer"));
    }
    public function listAcount(){
        $users = User::where("role", "!=", 5)->get();
        return view("Admin.Manager.listAcount", compact('users'));
    }

}
