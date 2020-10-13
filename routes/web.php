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
//admin
Route::get('/admin', '\App\Http\Controllers\Admin\AdminController@index');
Route::get('/admin/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name("logout-ad");
Route::get('/admin/login', '\App\Http\Controllers\Auth\LoginController@login')->name("login-ad");
Route::get('/admin/list', '\App\Http\Controllers\Admin\AdminController@listAcount')->name("listadmin");
Route::get('/admin/register', '\App\Http\Controllers\Auth\RegisterController@showAdminRegisterForm')->name("Register");
Route::post('/admin/register', '\App\Http\Controllers\Auth\RegisterController@createAdmin');

//admin manager account
Route::get("/admin/listAccount","\App\Http\Controllers\Admin\UserController@index")->name("listAccount");
//admin manager customer
Route::get("/admin/UserAccount/{id}","\App\Http\Controllers\Admin\UserController@show")->name("showuser");

Route::get('/auth/login',function(){
    return view("Admin.login");
});
//Route::view("register","register");

//Customer
Route::get("/","\App\Http\Controllers\Customer\CustomerController@index")->name("home.index");
Route::get("/loginCustomer","\App\Http\Controllers\Customer\CustomerController@loginCustomer")->name("login");
Route::post("/postlogin","\App\Http\Controllers\Customer\CustomerController@postLogin")->name("postlogin");
Route::get("/registerCustomer","\App\Http\Controllers\Customer\CustomerController@Register")->name("registercustomer");
Route::post("/postregisterCustomer","\App\Http\Controllers\Customer\CustomerController@PostRegister")->name("postRegister");
//Route::get("/confirmCustomer","\App\Http\Controllers\Customer\CustomerController@postLogin")->name("confirmCustomer");

