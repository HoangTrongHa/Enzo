<?php


namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class refundController extends Controller
{
    public function index()
    {
        $cus = Customer::where("loancustomer", "!=", 0)->get();
        return view("Admin.Refund.index", compact("cus"));
    }

    public function showrefund($id)
    {
        $cus = Customer::Where("loanrefund", "!=", null)->FindOrFail($id);

        $end = ($cus->loancustomer) - ($cus->loanrefund);

        return view("Admin.Refund.show", compact("cus","end"));
    }

    public function changStatus(Request $req, $id)
    {
        try {
            DB::beginTransaction();
            $cus = Customer::with(['history' => function ($query) {
                $query->where("status", 1);
            }])->FindOrFail($id);
            $his = $cus->history()->first();

            $cus->update([
                "loancustomer" => $req->reset
            ]);

            $his->update([
                'status' => $req->status
            ]);

            DB::commit();
            return redirect()->route("refund");
        } catch (\Exception $exception) {
            DB::rollBack();
            return back();
        }
    }

    public function changStatusDelay($id, Request $req)
    {
        $cus = Customer::with(['history' => function ($query) {
            $query->where("status", 1);
        }])->FindOrFail($id);

        $cus->update([
            "static" => $req->static
        ]);
        return redirect()->route("delay");
    }
}
