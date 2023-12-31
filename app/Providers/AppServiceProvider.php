<?php

namespace App\Providers;

use App\Models\User;
use App\Mail\welcomeUser;
use Illuminate\Support\Facades\Mail;
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
   User::created(function($user){
    Mail::to($user)->send(new welcomeUser($user));
   });
   
}
}
