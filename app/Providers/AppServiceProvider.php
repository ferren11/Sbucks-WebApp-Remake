<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        date_default_timezone_set('Asia/Jakarta');
        $currentTime = date('H');

        $greeting = '';
        if ($currentTime >= 5 && $currentTime < 12) {
            $greeting = 'Good Morning';
        } elseif ($currentTime >= 12 && $currentTime < 18) {
            $greeting = 'Good Afternoon';
        } else {
            $greeting = 'Good Evening';
        };

        View::share('greeting', $greeting);
        View::share('user', User::where('user_id', 'US000002')->firstOrFail());
    }
}
