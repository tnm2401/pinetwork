<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Http;
use Request;
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
      
            $ip = request()->ip();
            if($ip == "127.0.0.1"){
            $tz = "8";            
        }
            else{
            $ipInfo = Http::get('http://ip-api.com/json/'.$ip);
            $ipInfo = json_decode($ipInfo);
            $timezone = $ipInfo->timezone;
            date_default_timezone_set($timezone);
            $tz = date_default_timezone_get();     
            // $tz = "45.33.47.250";
            }
            View::share('tz',$tz);
    }
}
