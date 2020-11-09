<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class LoanMiddeware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $static = Auth::guard("Customer")->user();
            if ($static->static == 1) {
                return view("Customer.confirm");
            } else {
                return redirect()->route("loan");
            }
        }
}
