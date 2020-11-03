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
//        $ = Customer::where("static" ,)->get();

        return view('Admin.index');
    }

    public function listAcount()
    {
        $users = User::where("role", "!=", 5)->get();
        return view("Admin.Manager.listAcount", compact('users'));
    }

}
