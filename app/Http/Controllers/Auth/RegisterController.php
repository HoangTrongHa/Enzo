<?php

namespace App\Http\Controllers\Auth;

use App\Customer;
use App\Http\Requests\AdminCreateRequest;
use App\Role;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
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
        $this->middleware('guest:Customer');
    }

    public function showAdminRegisterForm()
    {
        return view("auth.register");
    }

    protected function createAdmin(Request $request)
    {

        if ($request->hasFile('Avatar')) {
            $file = Storage::disk('public')->put('',  $request->file("Avatar"));
        }
        $User = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            'avatar' => isset($file) ? $file : null,

        ]);
//        $User ->roles()
//            ->attach(Role::where('name', 'employee')->first());
       return redirect()->route("login-ad");
    }

    public function showCustomerRegisterForm()
    {
        return view('Customer.register');
    }

    protected function createCustonmer(Request $request)
    {
//        $this->validator($request->all())->validate();
        $Customer = Customer::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/writer');
    }
}
