<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blogEditor', function () {
    return view('blogEditor');
});

Route::get('/blogListing', function () {
    return view('blogListing');
});