<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use App\upload;

class SearchController extends Controller
{
    public function findSearch($id)
    {
        $cus = Customer::FindOrFail($id);
        $upload = upload::where("customerid", $cus->id)->get();
        return view("Admin.searchview.findsearch", compact("cus","upload"));
    }
}
