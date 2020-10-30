<?php
use Illuminate\Support\Facades\Route;

Route::get("/admin/banking","\App\Http\Controllers\Admin\BankingController@index")->name("index-banking");
Route::get("/admin/show-banking/{id}","\App\Http\Controllers\Admin\BankingController@showBanking")->name("show-banking");
//Route::get('notes', 'BankingController@index');
Route::get('/admin/pdf/{id}', '\App\Http\Controllers\Admin\BankingController@postShowBanking')->name("post-showbanking");

Route::get('/admin/refund', '\App\Http\Controllers\Admin\refundController@index')->name("refund");
Route::get('/admin/show-refund/{id}', '\App\Http\Controllers\Admin\refundController@showrefund')->name("show-refund");
Route::post('/admin/chang-status-history/{id}', '\App\Http\Controllers\Admin\refundController@changStatus')->name("change-status-history");
Route::post('/admin/chang-status-delay/{id}', '\App\Http\Controllers\Admin\refundController@changStatusDelay')->name("change-status-delay");

Route::get("/admin/delay",'\App\Http\Controllers\Admin\DelayController@index')->name("delay");
Route::get("/admin/show-delay/{id}",'\App\Http\Controllers\Admin\DelayController@showDelay')->name("show-delay");
