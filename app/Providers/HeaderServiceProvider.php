<?php

namespace App\Providers;

use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class HeaderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('admin.templates.master', function ($view) {
            $website_info = DB::table('website_info')->get();
            $all_admin = Admin::all();
            $view->with(['website_info'=>$website_info, 'all_admin'=>$all_admin]);
        });
    }
}
