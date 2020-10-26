<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\History;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BankingController extends Controller
{
    public function  index(){
        $cus = Customer::where("static", 2)->get();
        foreach ($cus as $list){
            $list->id;
            $his = History::where("customerid", $list->id)->get();
            return view("Admin.banking.index",compact("his","cus"));
        }
        return false;
    }
    public function showBanking($id){
        $cus = Customer::FindOrFail($id);
      $his= $cus->history()->where("customerid",$cus->id)->get();
      return view("Admin.banking.showbanking",compact("his","cus"));
    }

}
