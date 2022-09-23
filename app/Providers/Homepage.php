<?php

namespace App\Providers;

use App\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class Homepage extends ServiceProvider
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
        
        View::composer(["template.header",'template.footer','admin.template.header','auth.author','auth.login','auth.passwords.email'], function($view) {
            $view->with("menu", Setting::Menu()->get());
            $view->with("logo", Setting::Logo()->firstorFail("image"));
        });

        View::composer(["layouts.parent","layouts.article_layout","layouts.auth_layouts","admin.template.header",'admin.layouts.master'], function($view) {
            $view->with("favicon", Setting::Favicon()->firstorFail("image"));
            $view->with("title", Setting::Title()->firstorFail()->value);
            $view->with("desc", Setting::Tag()->firstorFail()->value);
        });
        
    }
}
