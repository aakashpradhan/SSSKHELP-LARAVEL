<?php

use App\Http\Controllers\DonorController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


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

Route::post('/donors-login', [LoginController::class, 'login'])->name('donors-login');

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::match(['get', 'post'], '/logout', [LoginController::class, 'logout'])->name('logout');


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
