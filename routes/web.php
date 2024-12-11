<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landing');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/vendors', App\Http\Controllers\VendorController::class);
