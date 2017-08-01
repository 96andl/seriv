<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap tarasivanna_kiev application services.
     *
     * @return void
     */
    public function boot()
    {
       /* DB::listen(function ($query) {
            dump($query);
        });*/
    }

    /**
     * Register tarasivanna_kiev application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
