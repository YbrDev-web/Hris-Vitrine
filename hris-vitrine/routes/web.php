<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contactForm'])->name('contact.form');
Route::post('/contact', [HomeController::class, 'submitContact'])->name('contact.submit');
Route::get('/a-propos', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/services', [App\Http\Controllers\ServiceController::class, 'index'])->name('services');


