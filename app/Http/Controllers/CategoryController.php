<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Article;

class CategoryController extends Controller
{


    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function showCategory($category)
    {  
        $data = Str::slug($category);
         $post =  Category::firstWhere("slug", $data)  ?? abort(404);
        $page = "category" . ' ' . "/" . ' ' . $post->name;
       $posts= $post->article_category()->where("status", 1)->paginate(8);
        return view("articles.pages.category",compact('post','posts','page'));
    }

    /**
     * Show the form for editing the specified resource.
     *

    
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
