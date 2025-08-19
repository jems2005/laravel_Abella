<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('pages.home');
})->name('home');

Route::get('/load', function () {
    return view('pages.load');
})->name('load');

Route::get('/record', function () {
    return view('pages.record');
})->name('record');
