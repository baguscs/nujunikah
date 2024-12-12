<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landing');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/vendors', App\Http\Controllers\VendorController::class);

Route::resource('/users', App\Http\Controllers\UserController::class);

Route::resource('/events', App\Http\Controllers\EventController::class);

Route::resource('/testimonials', App\Http\Controllers\TestimoniController::class);

Route::resource('/galleries', App\Http\Controllers\GalleryController::class);

Route::resource('/notifications', App\Http\Controllers\NotificationController::class);
Route::get('/notifications/send-message/{id}', [App\Http\Controllers\NotificationController::class, 'sendMessage'])->name('notifications.sendMessage');
