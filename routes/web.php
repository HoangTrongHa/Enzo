<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::group(["prefix" => "admin"], function () {
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name("logout-ad");
    Route::get('/login-admin', '\App\Http\Controllers\Auth\LoginController@showAdminLoginForm')->name("login-ad");
    Route::post('/postlogin-admin', '\App\Http\Controllers\Auth\LoginController@postLoginAdmin')->name("post-login-admin");
    Route::get('/register', '\App\Http\Controllers\Auth\RegisterController@showAdminRegisterForm')->name("Register");
    Route::post('/postregister', '\App\Http\Controllers\Auth\RegisterController@createAdmin')->name("postRegister-admin");
    Route::group(["middleware" => ["admin", "notify"]], function () {
        Route::group(["middleware" =>["admin" ,"search"]],function (){
            Route::get('/create-admin', '\App\Http\Controllers\Admin\AdminController@createAdmin')->name("create-admin");
            Route::post('/post-create-admin', '\App\Http\Controllers\Admin\AdminController@postCreateAdmin')->name("post-create-admin");
            Route::get('/', '\App\Http\Controllers\Admin\AdminController@index')->name("home.admin");
            Route::get('/list', '\App\Http\Controllers\Admin\AdminController@listAcount')->name("listadmin");
            Route::get('/delete-admin/{id}', '\App\Http\Controllers\Admin\AdminController@deleteAdmin')->name("delete-admin");
            Route::get("LoanAccount/Loan","\App\Http\Controllers\Admin\LoanController@index")->name("loan.index");
            Route::get("Loan-Account-Create/deleteloancus/{id}","\App\Http\Controllers\Admin\LoanController@deleteLoan")->name("loan.delete");
            Route::get("Loan-Account-Create/Loan/{id}","\App\Http\Controllers\Admin\LoanController@createLoan")->name("loan.createLoan");
            Route::post("updateLoan/{id}","\App\Http\Controllers\Admin\LoanController@postLoan")->name("loan.postcreateLoan");
            Route::get("/写真認証リスト","\App\Http\Controllers\Admin\UserController@checkImager")->name("checkImager");
            Route::get("/search-customer","\App\Http\Controllers\Admin\UserController@search")->name("search");
            Route::get("/search-customer-find/{id}","\App\Http\Controllers\Admin\SearchController@findSearch")->name("findSearch");
            Route::get("/UserAccount/changer", "\App\Http\Controllers\Admin\UserController@showChanger")->name("showChanger");
            Route::get("/UserAccount/{id}", "\App\Http\Controllers\Admin\UserController@show")->name("showuser");
            Route::get("/UserAccount/grantRight/{id}", "\App\Http\Controllers\Admin\UserController@grantRight")->name("showgrantRightAdmin");
            Route::post("/UserAccount/PostgrantRight/{id}", "\App\Http\Controllers\Admin\UserController@PostgrantRight")->name("PostgrantRight");
            Route::get("/listAccount", "\App\Http\Controllers\Admin\UserController@index")->name("listAccount");
            Route::get("/listAccount/{id}", "\App\Http\Controllers\Admin\UserController@watchInformation")->name("watchInformation");
            Route::get('/send-email/destroy/{id}', '\App\Http\Controllers\Admin\MailController@refuse')->name("mail-refuse");
            Route::get('/send-email/moneytransfer/{id}', '\App\Http\Controllers\Admin\MailController@moneyTransfer')->name("money-transfer");
            Route::get("/app-new","\App\Http\Controllers\Admin\NewappController@index")->name("index-appnew");
            Route::get("/UserAccount/app-new/{id}", "\App\Http\Controllers\Admin\NewappController@show")->name("show-app");
            Route::get("/banking","\App\Http\Controllers\Admin\BankingController@index")->name("index-banking");
            Route::get("/show-banking/{id}","\App\Http\Controllers\Admin\BankingController@showBanking")->name("show-banking");
            Route::post('/post-banking/{id}', '\App\Http\Controllers\Admin\BankingController@postShowBanking')->name("post-showbanking");
            Route::get('/pdf/{id}', '\App\Http\Controllers\Admin\BankingController@pirntfPdf')->name("pirntfPdf");
            Route::get('/refund', '\App\Http\Controllers\Admin\refundController@index')->name("refund");
            Route::get('/show-refund/{id}', '\App\Http\Controllers\Admin\refundController@showrefund')->name("show-refund");
            Route::post('/chang-status-history/{id}', '\App\Http\Controllers\Admin\refundController@changStatus')->name("change-status-history");
            Route::post('/chang-status-delay/{id}', '\App\Http\Controllers\Admin\refundController@changStatusDelay')->name("change-status-delay");
            Route::get("/delay",'\App\Http\Controllers\Admin\DelayController@index')->name("delay");
            Route::get("/show-delay/{id}",'\App\Http\Controllers\Admin\DelayController@showDelay')->name("show-delay");
            Route::get("/show-sent-mail/{id}",'\App\Http\Controllers\Admin\DelayController@sentMail')->name("showSentMail");
            Route::post("/send-Mail/{id}",'\App\Http\Controllers\Admin\DelayController@sendMail')->name("send-Mail");
            Route::post('/find-nal/{id}', '\App\Http\Controllers\Admin\refundController@end')->name("end");
            Route::post('/have-balance/{id}', '\App\Http\Controllers\Admin\refundController@haveBalance')->name("have-balance");
            Route::get("/history/customer/{id}","\App\Http\Controllers\Admin\HistoryController@index")->name("history");
            Route::group(["prefix" => "list-dark"],function (){
                Route::get("/","\App\Http\Controllers\Admin\ListdarkController@index")->name("list-dark");
                Route::post("/change-status-to-list-dark/{id}","\App\Http\Controllers\Admin\ListdarkController@importlist")->name("import-list");
                Route::get("/show-dark/{id}","\App\Http\Controllers\Admin\ListdarkController@showDask")->name("showDask");
                Route::get("delete/customer/{id}","\App\Http\Controllers\Admin\ListdarkController@deleteInfor")->name("delete-customer");
            });
        });

    });
});
Route::get("/", "\App\Http\Controllers\Customer\CustomerController@index")->name("home");
Route::get("/loginCustomer", "\App\Http\Controllers\Customer\LoginController@showLoginForm")->name("login");
Route::post("/postlogin-cus", "\App\Http\Controllers\Customer\LoginController@loginUser")->name("postlogin-cus");
Route::get("/registerCustomer", "Customer\CustomerController@Register")->name("registercustomer");
Route::post("/registerCustomer", "Customer\CustomerController@PostRegister")->name("postRegister");
Route::get("/application", "\App\Http\Controllers\Customer\CustomerController@application")->name("application");
Route::group(['middleware' => 'customer'], function () {
    Route::get('/logout', '\App\Http\Controllers\Customer\LoginController@logout')->name("logout-customer");
    Route::get("/application", "\App\Http\Controllers\Customer\CustomerController@application")->name("application");
    Route::post("/postProfile/{id}", "\App\Http\Controllers\Customer\CustomerController@upLoad")->name("upload");
    Route::group(['middleware' => 'customer'],function (){
        Route::get("/loan", "\App\Http\Controllers\Customer\CustomerController@loan")->name("loan");
        Route::get("/sinsei", "\App\Http\Controllers\Customer\CustomerController@sinSei")->name("sinsei");
        Route::post("/postSinsei", "\App\Http\Controllers\Customer\CustomerController@postSinsei")->name("postSinsei");
        Route::get("/sinsei3", "\App\Http\Controllers\Customer\CustomerController@sinSei3")->name("sinsei3");
        Route::post("/postSinsei3/{id}", "\App\Http\Controllers\Customer\CustomerController@postSinsei3")->name("postSinsei3");
        Route::post("/refuse-sinsei-3/{id}", "\App\Http\Controllers\Customer\CustomerController@refuseSinsei3")->name("refuse-sinsei-3");
        Route::get("/customer/banking", "\App\Http\Controllers\Customer\CustomerController@customerBanking")->name("customerbanking");
        Route::POST('/customer/post-banking/{id}', '\App\Http\Controllers\Customer\CustomerController@postBankingCus')->name("customer-post-banking");
        Route::get("/customer/moneyR", "\App\Http\Controllers\Customer\CustomerController@moneyR")->name("moneyR");
        Route::get("/customer/history-customer{id}", "\App\Http\Controllers\Customer\CustomerController@history")->name("history-customer");
        Route::post("/customer/moneyR/{id}", "\App\Http\Controllers\Customer\CustomerController@postMoneyR")->name("postMoneyR");
        Route::get('/chat', 'ChatsController@index');
        Route::get('/sender', 'ChatsController@fetchMessages');
        Route::post('/sender', 'ChatsController@PostfetchMessages')->name("post-sender");
        Route::post('/messages', 'ChatsController@sendMessage');
    });
});
