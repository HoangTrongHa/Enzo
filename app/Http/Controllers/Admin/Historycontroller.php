<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\History;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Historycontroller extends Controller
{
    public function index($id)
    {
        $his =History::where("customerid",$id)->orderBy('created_at', 'desc')->get();
        return view("Admin.history.index",compact("his"));

    }
}
