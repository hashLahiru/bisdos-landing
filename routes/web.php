<?php

use Illuminate\Support\Facades\Route;

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
