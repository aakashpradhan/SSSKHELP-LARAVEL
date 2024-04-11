<?php

use App\Http\Controllers\DonorController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('app');
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

Route::get('/my-account', function () {
    return view('my-account');
});

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
