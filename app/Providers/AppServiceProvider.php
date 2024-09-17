<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\ChMessage;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        if(Schema::hasTable('categories')){
            View::share('categories', Category::orderBy('name')->get());

            View::composer('*', function ($view) {
                $unreadCount = 0;
        
                if (Auth::check()) { // Controlla se l'utente è autenticato
                    $userId = Auth::id();
                    $unreadCount = ChMessage::where('to_id', $userId)
                                          ->where('seen', 0)
                                          ->count();
                }
        
                $view->with('unreadMessagesCount', $unreadCount);
            });
	}
    }
}
