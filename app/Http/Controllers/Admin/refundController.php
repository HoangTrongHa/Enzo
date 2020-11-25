<?php


namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class refundController extends Controller
{
    public function index()
    {
        $cus = Customer::where("static", 7)->where("loancustomer", "!=", 0)->get();
        return view("Admin.Refund.index", compact("cus"));
    }

    public function showrefund($id)
    {
        $cus = Customer::where("static", 7)->FindOrFail($id);
        $end = ($cus->loancustomer) - ($cus->loanrefund);

        return view("Admin.Refund.show", compact("cus", "end"));
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
                "loancustomer" => null,
                "payment_term" => null,
                "maxtotal" => null,
                "borrowing" => null,
                "receive" =>null,
                "static" => 2,
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
        try {
            $cus = Customer::FindOrFail($id);
            $end = ($cus->loancustomer) - ($cus->loanrefund);
            $cus->update([
                "static" => 8,
                "loancustomer" => $end,
                "payment_term" => $req->payment_term,
                "loanrefund" => 0
            ]);
            return redirect()->route("delay");
        } catch (\Exception $exception) {
            DB::rollBack();
            return back();
        }
    }

    public function haveBalance($id, Request $req)
    {
        try {

            DB::transaction();
            $cus = Customer::FindOrFail($id);

            $cus->update([
                "static" =>2
            ]);
            DB::commit();
            Mail::send('Admin.mail.balence', ['cus' => $cus], function ($message) use ($cus) {
                $message->from('hahtth1907023@fpt.edu.vn', 'admin');
                $message->to($cus["email"])->subject('Enzo With Love');
            });
            return redirect()->route("refund");
        }catch (\Exception $exception){
            DB::rollBack();
            return back();
        }
    }


}
