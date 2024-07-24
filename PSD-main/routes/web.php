<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index']);

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/contactus', function () {
    return view('contact');
})->name('contactus');

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/selengkapnya', function () {
    return view('selengkapnya');
})->name('selengkapnya');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
