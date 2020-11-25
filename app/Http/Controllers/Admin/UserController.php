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
        $user = Customer::paginate(5);
        return view('Admin.Manager.ManagerAccount.index', compact("user"));
    }
    public function search(Request $request){

        $search = Customer::where('kanji_name','like','%'.$request->key.'%')
            ->orWhere('account_number',$request->key)->orWhere('phone_number','like','%'.$request->key.'%')
            ->orWhere('address','like','%'.$request->key.'%')->get();
        return view('Admin.searchview.index',compact("search"));
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
        return redirect()->route("checkImager");
    }

    public function checkImager() {
        $cus = Customer::where("static",1)->paginate(5);
        return view("Admin.Manager.ManagerAccount.checkImager",compact("cus"));
    }
}
