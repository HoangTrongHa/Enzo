<?php

namespace App\Http\Controllers\Customer;

use App\Customer;
use App\History;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRegister;
use App\upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class CustomerController extends Controller
{
    public function index()
    {
        return view("Customer.index");
    }

    public function Register()
    {
        return view("Customer.register");
    }

    public function PostRegister(CustomerRegister $request)
    {

        $sinhnhat = $request->birth_year + $request->birth_month + $request->birth_day;
        $cus = Customer::create([
            "tenchuhan" => $request->tenchuhan,
            "tenphienam" => $request->tenphienam,
            "male" => $request->male,
            "sinhnhat" => $sinhnhat,
            "thanhphangiadinh" => $request->thanhphangiadinh,
            "diachinha" => $request->diachinha,
            "sodienthoaicodinh" => $request->sodienthoaicodinh,
            "sodienthoaididong" => $request->sodienthoaididong,
            "email" => $request->email,
            "linkweb" => $request->linkweb,
            "truso" => $request->truso,
            "sdtcty" => $request->sdtcty,
            "songuoilam" => $request->songuoilam,
            "chucvu" => $request->chucvu,
            "namcongtac" => $request->namcongtac,
            "thoigianlamviec" => $request->thoigianlamviec,
            "thoigiannghi" => $request->thoigiannghi,
            "nguoibaolanh" => $request->nguoibaolanh,
            "diachinguoibaolanh" => $request->diachinguoibaolanh,
            "sdtnguoibaolanh" => $request->sdtnguoibaolanh,
            'password' => Hash::make($request['password']),
        ]);
        if ($cus) {
            return redirect()->route("login")->with("success", "Sign Up Success...");
        }
        return redirect()->back()->with("error", "Registration failed...");
    }

    public function application()
    {
        $static = Auth::guard("Customer")->user();
        $up = $static->upload()->first();
        if ($static->maxtotal !=null && $static->borrowing != null && $static->receive != null && $static->payment_term != null) {
            return redirect()->route("loan");
        } else {
            if ($up != null) {
                if ($static->static == 2) {
                    return redirect()->route("loan");
                } else {

                }
                return view("Customer.Confirm");
            } else {
                return view("Customer.application");
            }
        }


    }


    public function upload(Request $request)
    {
        if ($request->hasFile("avatar") || $request->hasFile('front') || $request->hasFile("idnhanhvien")
            || $request->hasFile("sotietkiem") || $request->hasFile("3thangluong") || $request->hasFile("nhieuanh")) {
            $file1 = Storage::disk()->put('public/front', $request->file("front"));

            $file2 = Storage::disk()->put('public/back', $request->file("back"));

            $file3 = Storage::disk()->put('public/idnhanhvien', $request->file("idnhanhvien"));

            $file4 = Storage::disk()->put('public/sotietkiem', $request->file("sotietkiem"));

            $file5 = Storage::disk()->put('public/3thangluong', $request->file("3thangluong"));

            $file6 = Storage::disk()->put('public/nhieuanh', $request->file("nhieuanh"));

            $file7 = Storage::disk()->put('public/avatar', $request->file("avatar"));

        }

        $upload = upload::create([

            'avatar' => $file7,
            'Front' => isset($file1) ? $file1 : null,
            'Back' => isset($file2) ? $file2 : null,
            'idnhanhvien' => isset($file3) ? $file3 : null,
            'luong' => isset($file5) ? $file5 : null,
            'Biasotietkiem' => isset($file4) ? $file4 : null,
            'manypicture' => isset($file6) ? $file6 : null,
            "customerid" => $request->customerid

        ]);
        return view("Customer.confirm");
    }

    public function loan()
    {

        $static = Auth::guard("Customer")->user();
        if ($static->loancus == null) {
            return view("Customer.loan", compact("static"));

        } else {
            if ($static->loancus != null && $static->receive != null) {
                return redirect()->route("sinsei3");
            }else{
                if ($static->maxtotal !=null && $static->borrowing != null && $static->receive != null && $static->payment_term != null) {
                    return view("Customer.loan", compact("static"));
                }
            }
            return view("Customer.confirm");
        }
    }

    public function sinsei()
    {
        return view("Customer.sinsei");
    }

    public function postSinsei(Request $req)
    {
        $id = Auth::guard("Customer")->user()->id;
        $cus = Customer::FindOrFail($id);
        $cus->loancus = $req->loancus;
        $cus->save();
        return view("Customer.confirm");

    }

    public function sinsei3()
    {
        $cus = Auth::guard("Customer")->user();
        return view("Customer.sinssei3", compact("cus"));
    }

    public function postSinsei3(Request $req)
    {
        $his = History::create([
            "customerid" => $req->customerid,
            "maxtotal" => $req->maxtotal,
            "Deducted" => $req->borrowing,
            "receive" => $req->receive,
            "payment_term" => $req->payment_term,
        ]);
        $his->save();
        return redirect()->route("application");
    }
}
