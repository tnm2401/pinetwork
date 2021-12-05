<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
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
      
      
            $ip = $_SERVER['REMOTE_ADDR'];
            if($ip == "127.0.0.1"){
            $ip="1.53.45.233";
            $ipInfo = file_get_contents('http://ip-api.com/json/' . $ip);
            $ipInfo = json_decode($ipInfo);
            $timezone = $ipInfo->timezone;
            date_default_timezone_set($timezone);
            $tz = date_default_timezone_get();            
        }
            else{
                $ipInfo = file_get_contents('http://ip-api.com/json/' . $ip);
            $ipInfo = json_decode($ipInfo);
            $timezone = $ipInfo->timezone;
            date_default_timezone_set($timezone);
            $tz = date_default_timezone_get();      
            }
            View::share('tz',$tz);
    }
}
