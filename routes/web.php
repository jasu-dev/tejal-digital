<?php

declare(strict_types=1);

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LeadsController;
use App\Http\Controllers\Admin\PageViewsController;
use App\Http\Controllers\ContactRequestController;
use App\Http\Controllers\EmailSubscriptionController;
use Illuminate\Support\Facades\Route;

// ─── Public Routes ──────────────────────────────────────────────────────────
Route::view('/', 'home.index')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [ContactRequestController::class, 'store'])->name('contact.store');
Route::post('/subscribe', [EmailSubscriptionController::class, 'store'])->name('subscribe');

// Portfolio
Route::view('/portfolio', 'portfolio.index')->name('portfolio');

// Portfolio – project case study pages
Route::prefix('portfolio')->group(function (): void {
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
Route::prefix('services')->group(function (): void {
    Route::view('/', 'services')->name('services.index');
    Route::view('/laravel-development', 'services.laravel-development')->name('services.laravel-development');
    Route::view('/wordpress-development', 'services.wordpress-development')->name('services.wordpress-development');
    Route::view('/ecommerce-development', 'services.ecommerce-development')->name('services.ecommerce-development');
    Route::view('/saas-development', 'services.saas-development')->name('services.saas-development');
    Route::view('/custom-crm-development', 'services.crm-development')->name('services.crm-development');
    Route::view('/rest-api-development', 'services.api-development')->name('services.api-development');
});

// Redirects
Route::redirect('/contact-us', '/contact', 301);

// ─── Admin Routes ────────────────────────────────────────────────────────────
Route::prefix('admin')->name('admin.')->middleware('noindex')->group(function (): void {
    // Guest-only: login
    Route::middleware('guest')->group(function (): void {
        Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    });

    // Authenticated admin routes
    Route::middleware(['auth', 'admin'])->group(function (): void {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

        // Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


        // Leads
        Route::get('/leads', [LeadsController::class, 'index'])->name('leads.index');
        Route::get('/leads/{lead}', [LeadsController::class, 'show'])->name('leads.show');
        Route::patch('/leads/{lead}/status', [LeadsController::class, 'updateStatus'])->name('leads.update-status');
        Route::delete('/leads/{lead}', [LeadsController::class, 'destroy'])->name('leads.destroy');

        // Page Views
        Route::get('/page-views', [PageViewsController::class, 'index'])->name('page-views.index');
    });
});