<?php
namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoanController extends Controller
{
    public function index()
    {
        $user = Customer::whereNotNull("loancus")->get();
        return view("Admin.Manager.Loan.index", compact("user"));
    }

    public function createLoan($id)
    {
        $cus = Customer::findOrFail($id);
        return view("Admin.Manager.Loan.createLoan", compact("cus"));
    }

    public function postLoan($id, Request $req)
    {

//        dd($req->all());
        $cus = Customer::FindOrFail($id);

        $cus->maxtotal = $req->maxtotal;
        $cus->borrowing = $req->borrowing;
        $cus->receive = $req->receive;
        $cus->payment_term = $req->payment_term;
        $cus->save();
        return redirect()->route("loan.index")->with("success", "Update products successfully");
    }
}
