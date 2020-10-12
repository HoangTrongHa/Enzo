<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = Customer::all();
        return view('Admin.Manager.ManagerAccount.index',compact("user"));
    }
}
