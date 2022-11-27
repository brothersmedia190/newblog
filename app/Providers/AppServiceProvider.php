<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        //
    }
 
    public function boot()
    {
        Paginator::useBootstrap();
        $setting_data = Setting::where('id',1)->first();
        view()->share('global_setting_data', $setting_data);
    }
}
