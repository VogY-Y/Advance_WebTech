<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;



//api

Route::get('/apt', function () {
    return view('apitest');
});

Route::get('/aptP', function () {
    return view('apitest_P');
});