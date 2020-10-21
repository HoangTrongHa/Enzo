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


//Auth::routes();
////admin
//Route::middleware(['first', 'second'])->group(function () {
Route::group(["prefix" => "admin"], function () {
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name("logout-ad");
    Route::get('/test', '\App\Http\Controllers\Auth\LoginController@showAdminLoginForm')->name("login-ad");
    Route::post('/postlogin', '\App\Http\Controllers\Auth\LoginController@adminLogin')->name("login-ad");
    Route::get('/register', '\App\Http\Controllers\Auth\RegisterController@showAdminRegisterForm')->name("Register");
    Route::post('/register', '\App\Http\Controllers\Auth\RegisterController@createAdmin');

    Route::group(["middleware" => "admin"], function () {
        Route::get('/', '\App\Http\Controllers\Admin\AdminController@index')->name("home.admin");
        Route::get('/list', '\App\Http\Controllers\Admin\AdminController@listAcount')->name("listadmin");
    });

});


//});
//admin manager account
Route::get("/admin/listAccount", "\App\Http\Controllers\Admin\UserController@index")->name("listAccount");
//admin manager customer


Route::get("/admin/UserAccount/changer", "\App\Http\Controllers\Admin\UserController@showChanger")->name("showChanger");
Route::get("/admin/UserAccount/{id}", "\App\Http\Controllers\Admin\UserController@show")->name("showuser");
Route::get("/admin/UserAccount/grantRight/{id}", "\App\Http\Controllers\Admin\UserController@grantRight")->name("showgrantRightAdmin");
Route::post("/admin/UserAccount/PostgrantRight/{id}", "\App\Http\Controllers\Admin\UserController@PostgrantRight")->name("PostgrantRight");
//  Loan

Route::group(["prefix"=> "admin"],function (){
    Route::get("LoanAccount/Loan","\App\Http\Controllers\Admin\LoanController@index")->name("loan.index");
    Route::get("Loan-Account-Create/Loan/{id}","\App\Http\Controllers\Admin\LoanController@createLoan")->name("loan.createLoan");
    Route::post("updateLoan/{id}","\App\Http\Controllers\Admin\LoanController@postLoan")->name("loan.postcreateLoan");
});

//Route::get('/auth/login',function(){
//    return view("Admin.login");
//});
//Route::view("register","register");

//Customer
Route::get("/", "\App\Http\Controllers\Customer\CustomerController@index")->name("home");
Route::get("/loginCustomer", "\App\Http\Controllers\Customer\LoginController@showLoginForm")->name("login");
Route::post("/postlogin", "\App\Http\Controllers\Customer\LoginController@loginUser")->name("postlogin");
Route::get("/registerCustomer", "\App\Http\Controllers\Customer\CustomerController@Register")->name("registercustomer");
Route::post("/postregisterCustomer", "\App\Http\Controllers\Customer\CustomerController@PostRegister")->name("postRegister");

Route::group(['middleware' => 'test'], function () {

});
Route::post("/postProfile", "\App\Http\Controllers\Customer\CustomerController@upload")->name("upload");
Route::get("/loan", "\App\Http\Controllers\Customer\CustomerController@loan")->name("loan");
Route::get("/application", "\App\Http\Controllers\Customer\CustomerController@application")->name("application");
Route::get("/sinsei", "\App\Http\Controllers\Customer\CustomerController@sinsei")->name("sinsei");
