<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template.app');
});

Route::get('/tahun', function () {
    return view('master.tahun');
});
