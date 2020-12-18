<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MailController extends Controller
{
    public function refuse($id)
    {
        try {
            $cus = Customer::with(["history" => function ($query) {
                $query->where("status", 2)->first();
            }])->FindOrFail($id);
            Mail::send('Admin.mail.index', ['cus' => $cus], function ($message) use ($cus) {
                $message->from('hahtth1907023@fpt.edu.vn', 'admin');
                $message->to($cus["email"])->subject('Enzo With Love');
            });
            $cus->delete();
            $cus->save();
            return redirect()->route("checkImager");
        } catch (\Exception $exception) {
            DB::rollBack();
            return back();
        }

    }
    public function moneyTransfer($id)
    {

        $cus = Customer::with(["history" => function ($query) {
            $query->where("status", 2)->first();
        }])->FindOrFail($id);
        Mail::send('Admin.mail.refund', ['cus' => $cus], function ($message) use ($cus) {
            $message->from('hahtth1907023@fpt.edu.vn', 'admin');
            $message->to($cus["email"])->subject('Enzo With Love');
        });
        return redirect()->route("show-banking",$cus->id);
    }
}
