<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\History;
use App\Http\Controllers\Controller;
use App\Http\Requests\User;
use App\upload;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = Customer::paginate(2);
        return view('Admin.Manager.ManagerAccount.index', compact("user"));
    }
    public function search(Request $request){
        $user = Customer::paginate(2);
        $search = Customer::where('tenchuhan','like','%'.$request->key.'%')->orWhere('account_number',$request->key)->orWhere('sodienthoaididong','like','%'.$request->key.'%')
        ->orWhere('diachinha','like','%'.$request->key.'%')->get();

        return view('Admin.Manager.ManagerAccount.index',compact("search",'user'));
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
        $customer = Customer::with('upload')->findOrfail($id);
//        $upload = upload::where("customerid",$customer )->get();
        return view("Admin.Manager.ManagerAccount.AccountStatus", compact("customer"));
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

    public function checkImager() {
        $cus = Customer::where("static",1)->get();
        return view("Admin.Manager.ManagerAccount.checkImager",compact("cus"));
    }
}
