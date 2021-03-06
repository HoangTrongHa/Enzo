<?php

namespace App\Http\Controllers\Auth;

use App\Customer;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:User');
        $this->middleware('guest:Customer');
    }

    public function showAdminRegisterForm()
    {
        return view("auth.register");
    }

    protected function createAdmin(Request $request)
    {
        $this->validator($request->all())->validate();
        $User = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            'avatar' => $request["avatar"]
        ]);
        return redirect()->intended('login/admin');
    }

    public function showCustomerRegisterForm()
    {
        return view('Customer.register');
    }

    protected function createCustonmer(Request $request)
    {
        $this->validator($request->all())->validate();
        $Customer = Customer::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/writer');
    }
}
