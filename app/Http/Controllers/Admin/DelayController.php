<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DelayController extends Controller
{
   public function index(){
        $cus = Customer::where("static",8)->get();
        return view("Admin.delay.index",compact("cus"));
   }
   public function showDelay($id){
       $cus = Customer::where("static",8)->FindOrFail($id);
       $end = ($cus->loancustomer) - ($cus->loanrefund);
       return view ("Admin.delay.showDelay",compact("cus","end"));
   }

}
