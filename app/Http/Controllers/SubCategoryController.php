<?php

namespace App\Http\Controllers;

use App\subCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{

    public function showSubCategory($category)
    {  
        $data = Str::slug($category);
         $post =  subCategory::firstWhere("slug", $data) ?? abort(404);
       $posts= $post->article_subCategory()->where("status", 1)->paginate(8);
       $page = "Sub Category" . ' ' . "/" . ' ' . $post->name;
        return view("articles.pages.category",compact('post','posts','page'));
    }


}
