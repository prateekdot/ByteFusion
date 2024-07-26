<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/service', function () {
    return view('services');
});

Route::post('/submitForm', [ContactController::class, 'store']);

Route::get('/thank-you', function () {
    return view('thank-you');
})->name('thank-you');

use App\Http\Controllers\ServicesController;

Route::get('/services', [ServicesController::class, 'index'])->name('services');
