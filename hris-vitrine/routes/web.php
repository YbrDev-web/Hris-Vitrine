<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\RSSController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;






Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contactForm'])->name('contact.form');
Route::post('/contact', [HomeController::class, 'submitContact'])->name('contact.submit');
Route::get('/a-propos', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/services', [App\Http\Controllers\ServiceController::class, 'index'])->name('services');
Route::get('/Knowledge', [HomeController::class, 'knowledge'])->name('Knowledge');
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/articles', [RssController::class, 'index'])->name('articles.index');



Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



