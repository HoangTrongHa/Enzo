<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class LoanController extends Controller
{
    public function index()
    {
        $user = Customer::whereNotNull("loancus")->Where("loancus","!=" ,0)->orderBy('created_at', 'desc')->paginate(5);
        $cus = Customer::where("static",4)->get();
        return view("Admin.Manager.Loan.index", compact("user","cus"));
    }
    public function createLoan($id)
    {
        $cus = Customer::findOrFail($id);
        return view("Admin.Manager.Loan.createLoan", compact("cus"));
    }
    public function postLoan($id, Request $req)
    {
        $cus = Customer::FindOrFail($id);
        $cus->maxtotal = $req->maxtotal;
        $cus->borrowing = $req->borrowing;
        $cus->receive = $req->receive;
        $cus->payment_term = $req->payment_term;
        $cus->static = 4;
        $cus->save();
        return redirect()->route("loan.index")->with("success", "Update products successfully");
    }
    public function deleteLoan($id)
    {

        $cus = Customer::FindOrFail($id);
        $cus->update([
            "loancus" => 0
        ]);
        Mail::send('Admin.mail.index', ['cus' => $cus], function ($message) use ($cus) {
            $message->from('hahtth1907023@fpt.edu.vn', 'admin');
            $message->to($cus["email"])->subject('Enzo With Love');

        });
        return redirect()->route("loan.index");
    }
}
