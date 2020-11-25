<?php

namespace App\Http\Middleware;

use App\Customer;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class NotifiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $Customer = Customer::all();
        $wait = count( Customer::where("static",1)->get());
        $countUser = $Customer->filter(function ($item1) {
            return $item1->id;
        })->count();
        $Authorized = Customer::where("static", 2)->get();
        $loan = Customer::where("static",7)->get();
        $loancus =count(Customer::whereNotNull("loancus")->Where("loancus","!=" ,0)->get());
        $refund = Customer::where("static",7)->get();
        $delay = count($cus = Customer::where("static", 8)->where("loancustomer", "!=", 0)->get());
        $listDark = count(Customer::where("static",9)->get());
        view()->share([
            'wait' => $wait,
            "countUser" => $countUser,
            "Authorized" => $Authorized,
            "loan"=>$loan,
            "loancus"=>$loancus,
            "refund"=>$refund,
            "delay" =>$delay,
            "listDark" =>$listDark,

        ]);
        return $next($request);
    }
}
