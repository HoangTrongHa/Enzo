<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListdarkController extends Controller
{
    public function index(){
        $cus = Customer::where("static",5)->get();
        return view("Admin.listdark.index",compact("cus"));
    }

    public function importlist($id){
        try {

            $cus = Customer::Where("id",$id)->first();

            $cus-> update([
                "static" => 5
            ]);
            return redirect()->route("list-dark");
        }catch (\Exception $exception){
            DB::rollBack();
            return back();
        }
    }

    public function showDask($id){
        $cus = Customer::FindOrFail($id);
        return view ("Admin.listdark.show",compact("cus"));
    }
}