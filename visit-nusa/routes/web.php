<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');
Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');
Route::get('/detail-paket', function () {
    return view('pages.detail-paket');
})->name('detail-paket');

Route::get('/listing-articles', function () {
    return view('pages.listing-articles');
})->name('listing-articles');

Route::get('/detail-articles', function () {
    return view('pages.detail-articles');
})->name('detail-articles');

Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');

Route::get('/whishlist', function () {
    return view('pages.whishlist');
})->name('whishlist');

Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');

Route::get('/checkout-activity', function () {
    return view('pages.checkout-activity');
})->name('checkout.activity');

Route::get('/checkout-contact', function () {
    return view('pages.checkout-contact');
})->name('checkout.contact');

Route::get('/checkout-payments', function () {
    return view('pages.checkout-payments');
})->name('checkout.payments');

// Auth Routes
Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth-google-callback', [AuthController::class, 'handleGoogleCallback']);

// Email OTP Routes
Route::post('/auth/email/send-otp', [AuthController::class, 'sendOTP']);
Route::post('/auth/email/verify-otp', [AuthController::class, 'verifyOTP']);
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
