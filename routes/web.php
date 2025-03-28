<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('/teams', function () {
    return view('teams');
});

Route::get('/faqs', function () {
    return view('faq');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/termsandconditions', function () {
    return view('terms');
});

Route::get('/delivery-info-1', function () {
    return view('delivery-info-1');
});

Route::get('/delivery-info-2', function () {
    return view('delivery-info-2');
});

Route::get('/checkout-page', function () {
    return view('checkout-page');
});

// ----------------------------------------------------------
// --------------------  Admin Routes  ----------------------
// ----------------------------------------------------------
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::post('/preorder-submit', [ContactController::class, 'preorderSubmit'])->name('preorder.submit');
Route::post('/team-card-submit', [ContactController::class, 'teamCardSubmit'])->name('teamcard.submit');
Route::post('/cta-submit', [ContactController::class, 'contactUsSubmit'])->name('contactus.submit');
