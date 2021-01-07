<?php

namespace App\Http\Controllers\Customer;

use App\Customer;
use App\History;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRegister;
use App\Http\Requests\RegisterLoan;
use App\Http\Requests\uploadrequest;
use App\upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $birthday = ($request->birth_year) . "/" . ($request->birth_month) . "/" . ($request->birth_day);
        try {
            $cus = Customer::create([
                "kanji_name" => $request->tenchuhan,
                "name_transliteration" => $request->tenphienam,
                "male" => $request->male,
                "birthday" => $birthday,
                "family_structure" => $request->family_structure,
                "address" => $request->diachinha,
                "landline_number" => $request->sodienthoaicodinh,
                "phone_number" => $request->sodienthoaididong,
                "email" => $request->email,
                "linkweb" => $request->linkweb,
                "company" => $request->truso,
                "company_phone" => $request->sdtcty,
                "num_people" => $request->songuoilam,
                "position" => $request->chucvu,
                "work_year" => $request->namcongtac,
                "work_time" => $request->thoigianlamviec,
                "work_break" => $request->thoigiannghi,
                "protector" => $request->nguoibaolanh,
                "guardian_address" => $request->diachinguoibaolanh,
                "phone_number_guard" => $request->sdtnguoibaolanh,
                'password' => Hash::make($request['password']),
                'type_of_residence' => $request->type_of_residence,
                'electricmail' => $request->electricmail,
                'head_office_address' => $request->head_office_address,
                'number_of_residents' => $request->number_of_residents,
            ]);
            if ($cus) {
                return redirect()->route("login")->with("success", "Sign Up Success...");
            }
            return redirect()->back()->with("error", "Registration failed...");
        } catch (\Exception $exception) {
            DB::rollBack();
            return back();
        }
    }

    public function application()
    {
        $static = Auth::guard("Customer")->user();
        $up = $static->upload()->first();

        if ($up == null) {
            return view("Customer.application", compact("static"));
        } else {
            if ($static->static == 1) {
                return view("Customer.confirm");
            } else {
                return redirect()->route("loan");
            }
        }
    }

    public function upLoad(uploadrequest $request, $id)
    {
        try {
            if ($request->hasFile("avatar") || $request->hasFile('front') || $request->hasFile("idnhanhvien")
                || $request->hasFile("sotietkiem") || $request->hasFile("3thangluong") || $request->hasFile("filename")) {
                $file1 = Storage::disk()->put('public/front', $request->file("front"));
                $file2 = Storage::disk()->put('public/back', $request->file("back"));
                $file3 = Storage::disk()->put('public/idnhanhvien', $request->file("idnhanhvien"));
                $file4 = Storage::disk()->put('public/sotietkiem', $request->file("sotietkiem"));
                $file5 = Storage::disk()->put('public/3thangluong', $request->file("3thangluong"));
                $file6 = Storage::disk()->put('public/nhieuanh', $request->file("filename"));
                $file7 = Storage::disk()->put('public/avatar', $request->file("avatar"));
            }
            $upload = upload::create([
                'avatar' => isset($file7) ? $file7 : null,
                'Front' => isset($file1) ? $file1 : null,
                'Back' => isset($file2) ? $file2 : null,
                'idnhanhvien' => isset($file3) ? $file3 : null,
                'luong' => isset($file5) ? $file5 : null,
                'Biasotietkiem' => isset($file4) ? $file4 : null,
                'manypicture' => isset($file6) ? $file6 : null,
                "customerid" => $request->customerid

            ]);
            $cus = Auth::guard("Customer")->user()->FindOrFail($id);
            $cus->update([
                "name-bank" => $request->name_bank,
                "account_holder" => $request->account_holder,
                "account_type" => $request->account_type,
                "account_number" => $request->account_number,
            ]);
            return view("Customer.confirm");
        } catch (\Exception $exception) {
            DB::rollBack();
            return back();
        }

    }

    public function loan()
    {
        $cus = Auth::guard("Customer")->user();

        if ($cus->static == 2) {
            return view("Customer.loan", compact("cus"));
        } elseif ($cus->static == 3) {
            return view("Customer.confirm");
        } elseif ($cus->static == 4) {
            return redirect()->route("sinsei3");
        } elseif ($cus->static == 5) {
            return view("Customer.confirm");
        } elseif ($cus->static == 6) {
            return view("Customer.loan", compact("cus"));
        } elseif ($cus->static == 7) {
            return view("Customer.confirm");
        } elseif ($cus->static == 5) {
            return view("Customer.confirm");
        } elseif ($cus->static == 8) {
            return view("Customer.loan", compact("cus"));
        } elseif ($cus->static == 9) {
            return view("Customer.loan", compact("cus"));
        }
    }

    public function sinSei()
    {
        return view("Customer.sinsei");
    }

    public function postSinsei(RegisterLoan $req)
    {

        $id = Auth::guard("Customer")->user()->id;
        $cus = Customer::FindOrFail($id);
        $cus->loancus = $req->loancus;
        $cus->static = 3;
        $cus->save();
        return view("Customer.confirm");
    }

    public function sinSei3()
    {
        $cus = Auth::guard("Customer")->user();
        if ($cus->static == 4) {
            return view("Customer.sinssei3", compact("cus"));
        } else {
            return view("Customer.confirm");
        }
    }

    public function postSinsei3(Request $req, $id)
    {
        try {
            DB::beginTransaction();
            $cus = Auth::guard("Customer")->user()->FindOrFail($id);
            $cus->update([
                "loancustomer" => $req->loancustomer,
                "static" => 5
            ]);
            History::create([
                "customerid" => $req->customerid,
                "maxtotal" => $req->maxtotal,
                "Deducted" => $req->borrowing,
                "receive" => $req->receive,
                "payment_term" => $req->payment_term,

            ]);
            DB::commit();

            return redirect()->route("loan");
        } catch (\Exception $exception) {
            DB::rollBack();
            return back();
        }

    }

    public function refuseSinsei3(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $cus = Auth::guard("Customer")->user()->FindOrFail($id);
            $cus->update([
                "static" => 2,
                "maxtotal" => 0,
                "borrowing" => 0,
                "payment_term" => null,
                "loancus" => 0,
            ]);
            DB::commit();
            return redirect()->to("loan");
        } catch (\Exception $exception) {
            DB::rollBack();
            return back();
        }
    }

    public function customerBanking()
    {
        $cus = Auth::guard("Customer")->user();
        return view("Customer.banking", compact("cus"));
    }

    public function postBankingCus($id, Request $req)
    {
        try {
            $cus = Auth::guard("Customer")->user()->FindOrFail($id);
            if ($cus->static == 8) {
                $cus->loanrefund = $req->loanrefund;
            } else {
                $cus->loanrefund = $req->loanrefund;
                $cus->static = 7;
            }
            $cus->save();
            return view("Customer.confirm");

        } catch (\Exception $exception) {
            DB::rollBack();
            return back();
        }
    }

    public function moneyR()
    {
        $cus = Auth::guard("Customer")->user();
        return view("Customer.moneyR", compact("cus"));
    }

    public function postMoneyR($id, Request $req)
    {
        $cus = Auth::guard("Customer")->user()->FindOrFail($id);
        $cus->static = 7;
        $cus->loanrefund = $req->loanrefund;
        $cus->save();
        return view("Customer.confirm");
    }

    public function history($id)
    {
        $his = History::where("customerid", $id)->get();

        return view("Customer.history", compact("his"));
    }
}
