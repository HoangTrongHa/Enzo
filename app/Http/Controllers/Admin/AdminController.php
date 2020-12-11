<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{

    public function index()
    {
        return view('Admin.index');
    }

    public function listAcount()
    {
        $users = User::where("role", "!=", 5)->get();
        return view("Admin.Manager.listAcount", compact('users'));
    }

    public function postCreateAdmin(Request $req)
    {
        if ($req->hasFile('avatar-admin')) {
            $file1 = Storage::disk()->put('public/avatar-admin', $req->file("avatar-admin"));

        }
        $User = User::create([
            'name' => $req['name'],
            'email' => $req['email'],
            'password' => Hash::make($req['password']),
            'phone' => $req['phone'],
            'avatar' => isset($file1) ? $file1 : null,

        ]);
//        $User ->roles()
//            ->attach(Role::where('name', 'employee')->first());
        return redirect()->route("listadmin");
    }
    public function deleteAdmin($id)
    {
    $res = User::FindOrFail($id);
    $res->delete();
    return redirect()->route("listadmin");
    }
}

