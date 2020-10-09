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


Auth::routes();

Route::get('/admin', '\App\Http\Controllers\Admin\AdminController@index');
Route::get('/admin/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name("logout-ad");
Route::get('/admin/login', '\App\Http\Controllers\Auth\LoginController@login')->name("login-ad");

Route::get('/auth/login',function(){
    return view("Admin.login");
});
//Route::view("register","register");
//Customer
Route::get("/","\App\Http\Controllers\CustomerController@index")->name("home");
Route::get("/loginCustomer","\App\Http\Controllers\CustomerController@loginCustomer")->name("loginCustomer");

