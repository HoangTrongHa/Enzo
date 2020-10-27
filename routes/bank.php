<?php
use Illuminate\Support\Facades\Route;

Route::get("/admin/banking","\App\Http\Controllers\Admin\BankingController@index")->name("index-banking");
Route::get("/admin/show-banking/{id}","\App\Http\Controllers\Admin\BankingController@showBanking")->name("show-banking");
//Route::get('notes', 'BankingController@index');
Route::get('/admin/pdf/{id}', '\App\Http\Controllers\Admin\BankingController@postShowBanking')->name("post-showbanking");
