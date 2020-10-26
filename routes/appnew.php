<?php
use Illuminate\Support\Facades\Route;

Route::get("/admin/app-new","\App\Http\Controllers\Admin\NewappController@index")->name("index-appnew");
Route::get("/admin/UserAccount/app-new/{id}", "\App\Http\Controllers\Admin\NewappController@show")->name("show-app");
