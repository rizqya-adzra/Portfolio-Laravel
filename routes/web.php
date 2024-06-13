<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/certificate', function () {
    return view('certificate');
});

Route::get('/project', function () {
    return view('project', ['nama' => 'Rizqya-Adzra']);
});



