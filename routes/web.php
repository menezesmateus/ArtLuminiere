<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});
Route::get('/artes', function () {
    return view('artes');
});
Route::get('/user', function () {
    return view('user');
});
