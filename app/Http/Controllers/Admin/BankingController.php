<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\History;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Http\Request;

class BankingController extends Controller
{
    public function index()
    {
        $cus =Customer::where("static",5)->whereNotNull("loancustomer")->Where("loancustomer","!=",0)->get();
        return view("Admin.banking.index", compact("cus"));
    }

    public function showBanking($id)
    {
        $cus = Customer::with(["history" => function ($query) {
            $query->where("status", 2)->first();
        }])->FindOrFail($id);

//        $cus = Customer::with("history")->findOrFail($id)->first();
//        dd($cus->history());
        return view("Admin.banking.showbanking", compact("cus"));
    }

    public function postShowBanking($id)
    {
        try {
            $cus = Customer::with(["history" => function ($query) {
                $query->where("status", 2)->first();
            }])->FindOrFail($id);

            $pdf = PDF::loadView("Admin.pdf.index", compact("cus"));
            $pdf->download('bill.pdf') ;
            $cus->update([
                "static" => 6
            ]);
            return redirect()->route("refund");
        }catch (\Exception $exception){
            DB::rollBack();
            return back();
        }

    }

}
