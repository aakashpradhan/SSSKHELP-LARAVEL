<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/view-profile', function () {
        return view('view-profile');
    })->name('view-profile');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/after-reg', function () {
    return view('after-reg');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/delete-card', function () {
    return view('delete-card');
});

Route::get('/disclaimer', function () {
    return view('disclaimer');
});

Route::get('/donors-list', function () {
    return view('donors-list');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/general-instructions', function () {
    return view('general-instructions');
});

Route::get('/humanity-social-service', function () {
    return view('humanity-social-service');
});

Route::get('/mission', function () {
    return view('mission');
});

Route::post('/profile-preview', [RegisteredUserController::class, 'profile_preview'])->name('profile-preview');

Route::get('/wbds', function () {
    return view('wbds');
});


require __DIR__ . '/auth.php';
