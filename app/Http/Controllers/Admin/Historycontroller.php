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
//       $cus = Customer::with(["history",function($query){
//           $query->Where("customerid" ,$id)
//       }])->get();
        $his =History::where("customerid",$id)->get();


        return view("Admin.history.index",compact("his"));

    }
}
