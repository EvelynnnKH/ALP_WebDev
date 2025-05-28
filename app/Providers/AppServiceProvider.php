<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
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
        //
        Gate::define('insert-product', function(User $user){
            return in_array($user->role->role, ['admin']);
        });
        Gate::define('edit-product', function(User $user){
            return in_array($user->role->role, ['admin']);
        });
        Gate::define('delete-product', function(User $user){
            return in_array($user->role->role, ['admin']);
        });
        Gate::define('view-allorder', function(User $user){
            return in_array($user->role->role, ['admin']);
        });
        Gate::define('wishlist-product', function(User $user){
            return in_array($user->role->role, ['user']);
        });
        Gate::define('addToCart-product', function(User $user){
            return in_array($user->role->role, ['user']);
        });
        Gate::define('checkOut-product', function(User $user){
            return in_array($user->role->role, ['user']);
        });
        Gate::define('view-myorder', function(User $user){
            return in_array($user->role->role, ['user']);
        });
    }
}
