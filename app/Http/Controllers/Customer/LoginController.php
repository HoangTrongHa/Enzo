<?php

namespace App\Http\Controllers\Customer;

use App\Http\Requests\AdminCreateRequest;
use App\Http\Requests\userlogin;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest:Customer')->except('logout');
    }

    public function showLoginForm()
    {
        return view("Customer.login");
    }

    public function loginUser(Request $request,$user)
    {
        if ($this->attemptLogin($request)) {
            return redirect()->route("home");
        }
        return $this->sendFailedLoginResponse($request);
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return $this->loggedOut($request) ?: redirect()->route('/');
    }

    protected function credentials(Request $request)
    {

        return [
            'email' => $request->email,
            'password' => $request->password
        ];
    }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        return $this->authenticated($request, $this->guard()->user())
            ?: redirect()->intended($this->redirectPath());
    }

    protected function guard()
    {
        return Auth::guard('Customer');
    }

    function authenticated(Request $request, $user)
    {
        $user->update([
            'checklogin' => Carbon::now()->toDateTimeString()
        ]);
        dd($user);
    }

}
