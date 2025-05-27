<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if (env('APP_KEY') === 'production'){
            URL::forceScheme('https');
        }
        // Gates for student
        Gate::define("view-student", function (User $user) {
            return in_array($user->role, ["admin", "guest"]);
        });

        Gate::define("store-student", function (User $user) {
            return $user->role === "admin";
        });

        Gate::define("edit-student", function (User $user) {
            return $user->role === "admin";
        });

        Gate::define("destroy-student", function (User $user) {
            return $user->role === "admin";
        });

        // Gates for major
        Gate::define("view-major", function (User $user) {
            return in_array($user->role, ["admin", "guest"]);
        });

        Gate::define("store-major", function (User $user) {
            return $user->role === "admin";
        });

        Gate::define("edit-major", function (User $user) {
            return $user->role === "admin";
        });

        Gate::define("destroy-major", function (User $user) {
            return $user->role === "admin";
        });
    }
}
