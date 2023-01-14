<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        setLocale(LC_TIME, \App::getLocale());
        \App::singleton('SITE_CONFIGURATION', function()
        {
            return \App\Models\SiteConfiguration::where('status', 'active')->where('lang', \App::getLocale())->first();
        });
        \View::share('SITE_CONFIGURATION', \App::make('SITE_CONFIGURATION'));
    }
}
