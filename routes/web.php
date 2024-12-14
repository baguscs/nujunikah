<?php

use Illuminate\Support\Facades\Route;
use App\Models\Vendor;
use App\Models\Testimoni;
use App\Models\Gallery;
use App\Models\Tips;


Route::get('/', function () {
    $vendors = Vendor::all();
    $testimonis = Testimoni::orderBy('id', 'desc')->take(3)->get();
    $galleries = Gallery::orderBy('id', 'desc')->take(4)->get();
    $tips = Tips::orderBy('id', 'desc')->take(3)->get();

    return view('landing.index', compact('vendors', 'testimonis', 'galleries', 'tips'));
})->name('landing');

Route::get('/tips-&-tricks', function () {
    $tips = Tips::all();
    return view('landing.tips', compact('tips'));
})->name('tipsAndTricks');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/vendors', App\Http\Controllers\VendorController::class);

Route::resource('/users', App\Http\Controllers\UserController::class);

Route::resource('/events', App\Http\Controllers\EventController::class);

Route::resource('/testimonials', App\Http\Controllers\TestimoniController::class);

Route::resource('/galleries', App\Http\Controllers\GalleryController::class);

Route::resource('/notifications', App\Http\Controllers\NotificationController::class);
Route::get('/notifications/send-message/{id}', [App\Http\Controllers\NotificationController::class, 'sendMessage'])->name('notifications.sendMessage');

Route::resource('/tips', App\Http\Controllers\TipsController::class);
