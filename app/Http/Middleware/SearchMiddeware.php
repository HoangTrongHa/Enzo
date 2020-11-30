<?php

namespace App\Http\Middleware;

use App\Customer;
use Closure;

class SearchMiddeware
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
        $search = Customer::where('kanji_name', 'like', '%' . $request->key . '%')
            ->orWhere('name_transliteration', $request->key)->orWhere('phone_number', 'like', '%' . $request->key . '%')
            ->orWhere('address', 'like', '%' . $request->key . '%')->get();
        return $next($request);
    }
}
