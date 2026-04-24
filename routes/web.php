<?php

use App\Http\Controllers\ContactRequestController;
use App\Http\Controllers\EmailSubscriptionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home.index')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/portfolio', 'portfolio.index')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [ContactRequestController::class, 'store'])->name('contact.store');
Route::post('/subscribe', [EmailSubscriptionController::class, 'store'])->name('subscribe');

// Portfolio Projects
Route::prefix('portfolio')->group(function () {
    Route::view('/attendance-manager', 'portfolio.projects.attendance-manager')->name('portfolio.attendance-manager');
    Route::view('/promofusion360', 'portfolio.projects.promofusion360')->name('portfolio.promofusion360');
    Route::view('/krishna-academy', 'portfolio.projects.krishna-academy')->name('portfolio.krishna-academy');
    Route::view('/kifayat-card', 'portfolio.projects.kifayat-card')->name('portfolio.kifayat-card');
    Route::view('/tech-nukti', 'portfolio.projects.tech-nukti')->name('portfolio.tech-nukti');
    Route::view('/growix-smart-qr', 'portfolio.projects.growix-smart-qr')->name('portfolio.growix-smart-qr');
    Route::view('/tech-upkar', 'portfolio.projects.tech-upkar')->name('portfolio.tech-upkar');
    Route::view('/jixicloud', 'portfolio.projects.jixicloud')->name('portfolio.jixicloud');
    Route::view('/gujjutak-news', 'portfolio.projects.gujjutak-news')->name('portfolio.gujjutak-news');
    Route::view('/gmj-child-pro', 'portfolio.projects.gmj-child-pro')->name('portfolio.gmj-child-pro');
});

// Services
Route::prefix('services')->group(function () {
    Route::view('/laravel-development', 'services.laravel-development')->name('services.laravel-development');
    Route::view('/custom-software-development', 'services.custom-software')->name('services.custom-software');
    Route::view('/custom-crm-development', 'services.crm-development')->name('services.crm-development');
    Route::view('/wordpress-development', 'services.wordpress-development')->name('services.wordpress-development');
    Route::view('/ecommerce-development', 'services.ecommerce-development')->name('services.ecommerce-development');
    Route::view('/admin-dashboard-development', 'services.admin-dashboards')->name('services.admin-dashboards');
    Route::view('/rest-api-development', 'services.api-development')->name('services.api-development');
    Route::view('/security-performance-optimization', 'services.security-performance')->name('services.security-performance');
    Route::view('/maintenance-support', 'services.maintenance')->name('services.maintenance');
});

// redirecations
Route::redirect('/contact-us', '/contact', 301);