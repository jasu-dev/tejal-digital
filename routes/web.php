<?php

declare(strict_types=1);

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LeadsController;
use App\Http\Controllers\Admin\PageViewsController;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;
use App\Http\Controllers\ContactRequestController;
use App\Http\Controllers\EmailSubscriptionController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

// ─── Public Routes ──────────────────────────────────────────────────────────
Route::view('/', 'home.index')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [ContactRequestController::class, 'store'])->name('contact.store');
Route::post('/subscribe', [EmailSubscriptionController::class, 'store'])->name('subscribe');

// Portfolio index
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

// Portfolio – Static legacy project pages (kept for SEO / backward compat)
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

// Portfolio – dynamic project pages (registered after static pages so the slug doesn't shadow them)
Route::get('/portfolio/{slug}', [PortfolioController::class, 'show'])->name('portfolio.show');

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
Route::prefix('admin')->name('admin.')->group(function (): void {
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

        // Portfolio management
        Route::get('/portfolio', [AdminPortfolioController::class, 'index'])->name('portfolio.index');
        Route::get('/portfolio/create', [AdminPortfolioController::class, 'create'])->name('portfolio.create');
        Route::post('/portfolio', [AdminPortfolioController::class, 'store'])->name('portfolio.store');
        Route::get('/portfolio/{portfolio}/edit', [AdminPortfolioController::class, 'edit'])->name('portfolio.edit');
        Route::put('/portfolio/{portfolio}', [AdminPortfolioController::class, 'update'])->name('portfolio.update');
        Route::delete('/portfolio/{portfolio}', [AdminPortfolioController::class, 'destroy'])->name('portfolio.destroy');
        Route::patch('/portfolio/{portfolio}/toggle-status', [AdminPortfolioController::class, 'toggleStatus'])->name('portfolio.toggle-status');

        // Leads
        Route::get('/leads', [LeadsController::class, 'index'])->name('leads.index');
        Route::get('/leads/{lead}', [LeadsController::class, 'show'])->name('leads.show');
        Route::patch('/leads/{lead}/status', [LeadsController::class, 'updateStatus'])->name('leads.update-status');
        Route::delete('/leads/{lead}', [LeadsController::class, 'destroy'])->name('leads.destroy');

        // Page Views
        Route::get('/page-views', [PageViewsController::class, 'index'])->name('page-views.index');
    });
});