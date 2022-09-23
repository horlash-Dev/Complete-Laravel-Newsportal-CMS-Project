<?php

namespace App\Http\Controllers\Repository;

use App\Article;
use App\Category;

trait Articles
{
    public static function all()
    {   
       return $allpost= Article::with(["createdBy","category","subCategory"])->where("status",1)->orderBy('created_at','DESC')->get();
    }
    public static function Featured($no)
    {
        return $allpost= Article::with(["createdBy","category","subCategory"])->where("status",1)->where('featured', 1)->orderBy('created_at','DESC')->take($no)->get();
    }
    
    public static function Sort($no,$no2)
    { 
        return $allpost= Article::with(["createdBy","category","subCategory"])->where("status",1)->where('view_count', '>', $no)->orderBy('created_at','DESC')->take($no2)->inRandomOrder()->get();
    // return  Category::with(['article_category'])->where('slug', '=', $data)
    //     ->orWhere('slug', '=', $data2)->inRandomOrder()->get();
    } 

    public static function Sort_list($data,$no)
    {
       return $data->pluck("name")->take($no)->shuffle();
    }
    public static function sub_list($data,$no)
    {
       return $data->all("name")->take($no)->shuffle();
    }

    public static function category_sort($data,$no)
    {
     return Category::where('slug', '=', $data)
    ->firstorFail()->article_category()->where("status",1)->take($no)->get();
    }

}
