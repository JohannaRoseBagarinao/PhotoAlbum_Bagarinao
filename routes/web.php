<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.homepage');
})->name('homepage');

Route::get('/arts', function () {
    return view('page.arts');
})->name('arts');
Route::get('/car', function () {
    return view('page.sportscar');
})->name('car');

Route::get('/moviesgenre', function () {
    return view('page.moviesgenre');
})->name('moviesgenre');

Route::get('/anime', function () {
    return view('page.anime');
})->name('anime');

Route::get('/destination', function () {
    return view('page.destination');
})->name('destination');
