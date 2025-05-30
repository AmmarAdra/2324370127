<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/hosting-shared', function () {
    return view('hosting-shared');
});

Route::get('/hosting-vps', function () {
    return view('hosting-vps');
});

Route::get('/hosting-cloud', function () {
    return view('hosting-cloud');
});

Route::get('/hosting-email', function () {
    return view('hosting-email');
});

Route::get('/hosting-wordpress', function () {
    return view('hosting-wordpress');
});

Route::get('/hosting-reseller', function () {
    return view('hosting-reseller');
});

Route::get('/hosting-dedicated', function () {
    return view('hosting-dedicated');
});

Route::get('/hosting-ecommerce', function () {
    return view('hosting-ecommerce');
});

Route::get('/domain-checker', function () {
    return view('domain-checker');
});

Route::get('/domain-transfer', function () {
    return view('domain-transfer');
});

Route::get('/data-center', function () {
    return view('data-center');
});
