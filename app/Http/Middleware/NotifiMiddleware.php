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

        $wait = count(Customer::where("static",1)->get());

        $countUser = $Customer->filter(function ($item1) {
            return $item1->id;
        })->count();

        $newApplication = $Customer->filter(function ($item2){
//            return $
        })->count();
        $Authorized = Customer::where("static", 2)->get();

        $loan = $Customer->filter(function ($item3){
            return $item3->receive;
        });

        $loancus =count(Customer::where("receive",null )->where("static",2)->get());

        $refund = Customer::where("static",3)->get();

        $delay = count($cus = Customer::where("static",4)->get());

        $listDark = count(Customer::where("static",5)->get());

//        $refund = $Customer->filter(function ($item){
//            return
//        });
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
