<?php

namespace App\Http\Controllers\Admin;
use App\Customer;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;



class AdminController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {
//        $request->user()->authorizeRoles(['employee', 'admin']);
//        $Customer =Customer::all();
//
$wait = [];
$Authorized = [];
//        $wait = $Customer->filter(function ($item) {
//            return $item->role = 1;
//        })->count();
//        $Authorized = Customer::where("role" ,2)->get();
        return view('Admin.index'
            ,compact('wait','Authorized'));
    }
    public function listAcount(){
        $users = User::where("role", "!=", 5)->get();
        return view("Admin.Manager.listAcount", compact('users'));
    }
}
