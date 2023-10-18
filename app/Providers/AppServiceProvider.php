<?php

namespace App\Providers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // $this->app->bind('aa', function () {
        //     dd('afkf;lksdafklsfskldfjsdlkf');
        //     return 'This is my custom variable.';
        // });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function (View $view) {
            $site_settings = [
                '1' => 'one',
                '2' => 'two'
            ];
            $view->with('site_settings', $site_settings);
        });

        view()->share(
            'newUsersThisWeekCount',
            2
        );
    }
}
