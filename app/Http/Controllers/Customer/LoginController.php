<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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

    public function loginUser(Request $request)
    {
        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request)->with('success', __('sdgdfgdfgdfgdfgd'));
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
            'email' => $request->username,
            'password' => $request->password
        ];
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [__('アカウントまたはパスワードが間違っています。')],
        ]);
    }

    protected function guard()
    {
        return Auth::guard('Customer');
    }
}
