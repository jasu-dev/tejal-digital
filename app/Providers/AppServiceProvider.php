<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Livewire\Blaze\Blaze;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        if (app()->environment('production')) {
            URL::forceScheme('https');
        }

        Blade::directive('activeDesktopLink', function ($expression) {
            return "<?php echo request()->routeIs($expression) ? 'bg-white border border-zinc-200 font-medium text-zinc-800 hover:text-zinc-600' : 'text-zinc-500 hover:text-zinc-400'; ?>";
        });

        Blade::directive('activeMobileLink', function ($expression) {
            return "<?php echo request()->routeIs($expression) ? 'bg-zinc-50 font-medium text-zinc-800' : 'text-zinc-500 hover:bg-zinc-50'; ?>";
        });

        Blaze::optimize()
            ->in(resource_path('views/components'), memo: true, fold: true);
    }
}
