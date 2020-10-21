<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\User;
use App\upload;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = Customer::all();
        return view('Admin.Manager.ManagerAccount.index', compact("user"));
    }

    public function show($id)
    {
        $customer = Customer::FindOrFail($id);
        $upload = upload::where("customerid", $customer->id)->get();
        return view("Admin.Manager.ManagerAccount.show", compact("customer", "upload"));
    }

    public function showChanger()
    {
        $customer = Customer::all();
        return view("Admin.Manager.ManagerAccount.chang", compact("customer"));
    }

    public function grantRight($id)
    {

        $data = Customer::findOrfail($id);
        return view("Admin.Manager.ManagerAccount.AccountStatus", compact("data"));
    }

    public function PostgrantRight(Request $req, $id)
    {
        $cus = Customer::findOrFail($id);

        $cus->update([
            "static" =>$req->static
        ]);
        $cus->save();
        return redirect()->route("showChanger");
    }

//    public function loanAccount()
//    {
//        $cus = Customer::with('loan')->where("static", 2)->get();
//        return view("Admin.Manager.ManagerAccount.loanaccount", compact("cus"));
//    }
//
//    public function creatLoanAccount($id)
//    {
//        $cus = Customer::findOrFail($id);
//        $loan = Loan::all();
//        return view("Admin.Manager.ManagerAccount.createLoan", compact("cus", "loan"));
//    }
//
//    public function postLoanAccount(Request $res, $id)
//    {
//        $loan = Loan::findOrFail($id);
//        try {
//            $loan->update([
//
//            ]);
//        } catch (\Exception $e) {
//
//        }
//    }
}
