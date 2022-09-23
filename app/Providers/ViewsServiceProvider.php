<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Article;
use App\Http\Controllers\Repository\Articles;
use App\Category;
use App\Http\Controllers\ArticleController;
use App\Setting;
use App\subCategory;
use Spatie\Tags\Tag;

class ViewsServiceProvider extends ServiceProvider
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
        
        View::composer(['homepage.shared.mega_sidebar','homepage.shared.mega_sidebar','homepage.shared.categories','homepage.shared.tags','homepage.shared.news_scroll'],
         function($view) {
            $view->with('trending_list', Articles::all());
            $view->with('popular', Articles::Sort(Setting::where("name","sidebar_section")->firstorFail()->total_views,Setting::where("name","sidebar_section")->firstorFail()->total_post));
            $view->with('categories_sort', Articles::Sort_list(new Category,20));
            $view->with('tag_sort', Articles::Sort_list(new Tag,50));
            $view->with('sub_sort', Articles::sub_list(new subCategory,16));
        });
        
    }
}
