<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class DelayController extends Controller
{
   public function index(){
       $cus =Customer::where("static",7)->orderBy('updated_at', 'desc')->paginate(5);
       $sent = Customer::where("static" ,8)->orderBy('updated_at', 'desc')->paginate(5);
       return view("Admin.delay.index", compact("cus","sent"));
   }
   public function showDelay($id){
       $cus = Customer::where("static",7)->FindOrFail($id);
       $end = ($cus->loancustomer) - ($cus->loanrefund);
       return view ("Admin.delay.showDelay",compact("cus","end"));
   }
    public function sendMail($id){
       $cus = Customer::findOrFail($id);
        Mail::send('Admin.mail.warning-delay', ['cus' => $cus], function ($message) use ($cus) {
            $message->from('hahtth1907023@fpt.edu.vn', 'admin');
            $message->to($cus["email"])->subject('Enzo With Love');
        });
        $cus->update([
            "static"=>8,

        ]);
        return redirect()->to("admin/delay");
    }
    public function showSentMail($id){
        $cus = Customer::findOrFail($id);
        $end = ($cus->loancustomer) - ($cus->loanrefund);
        return view ("Admin.delay.sent-mail",compact("cus","end"));
    }
    public function sentMail($id){
        $cus = Customer::findOrFail($id);
        $end = ($cus->loancustomer) - ($cus->loanrefund);
        return view ("Admin.delay.sent-mail",compact("cus","end"));
    }
}
