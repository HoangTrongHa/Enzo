<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('Admin.index');
    }
    public function listAcount(){
        $users = User::where("static", "!=", 5)->get();
        return view("Admin.Manager.listAcount", compact('users'));
    }
}
