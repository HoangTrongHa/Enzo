<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DelayController extends Controller
{
   public function index(){
        $cus = Customer::where("static",3)->get();
        return view("Admin.delay.index",compact("cus"));
   }
   public function showDelay($id){
       $cus = Customer::where("static",3)->FindOrFail($id);
       return view ();
   }
}
