<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return 'Hello world';
});

Route::get('/test', function () {
    // return view('welcome');
    return 'Hello world';
});
