<?php

use Illuminate\Support\Facades\Route;

Route::get("admin/history/customer/{id}","HistoryController@index")->name("history");
