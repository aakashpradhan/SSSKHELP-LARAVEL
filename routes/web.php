<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonorController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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

Route::post('/register', [DonorController::class, 'store'])->name('register');

Route::get('/delete-registration', function () {
    return view('delete-registration');
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

Route::get('/donors-login', function () {
    return view('donors-login');
});


Route::get('/donors-registration', function () {
    return view('donors-registration');
})->name('donors-registration'); // Define the route name


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

Route::get('/my-account', function () {
    return view('my-account');
})->name('my-account');

Route::get('/profile-preview', function () {
    return view('profile-preview');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/reg-profile', function () {
    return view('reg-profile');
});

Route::get('/view-profile', function () {
    return view('view-profile');
});

Route::get('/wbds', function () {
    return view('wbds');
});


Route::post('/profile-preview', [DonorController::class, 'profile_preview'])->name('profile-preview');





require __DIR__ . '/auth.php';
