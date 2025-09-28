<?php

use App\Http\Controllers\ContactRequestController;
use App\Http\Controllers\EmailSubscriptionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/portfolio', 'portfolio')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [ContactRequestController::class, 'store'])->name('contact.store');
Route::post('/subscribe', [EmailSubscriptionController::class, 'store'])->name('subscribe');


//redirecations 
Route::redirect('/contact-us', '/contact', 301);