<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class BankingController extends Controller
{
    public function index()
    {
        $cus = Customer::where("static", 5)->orderBy('updated_at', 'desc')->paginate(5);
        $check = Customer::where("static", 6)->orderBy('updated_at', 'desc')->paginate(5);
        return view("Admin.banking.index", compact("cus", "check"));
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
            $cus = Customer::FindOrFail($id);
            $cus->update([
                "static" => 6
            ]);
            Toastr::success('顧客への完全な送金','お知らせ');
            return redirect()->route("index-banking");
        } catch (\Exception $exception) {
            DB::rollBack();
            return back();
        }
    }

    public function pirntfPdf($id)
    {
        try {
            $cus = Customer::FindOrFail($id);
            $pdf = PDF::loadView("Admin.pdf.index", compact("cus"));
            return $pdf->download('bill.pdf');
        }catch (Exception $exception){
            DB::rollBack();
            return back();
        }
    }

}
