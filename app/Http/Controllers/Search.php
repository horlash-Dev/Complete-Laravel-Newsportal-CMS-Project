<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Spatie\Tags\Tag;

class Search extends Controller
{
    public function tags(Tag $tag)
    {  
      $posts = Article::where('status',1)->orderBy('created_at','DESC')->withAllTags($tag->slug)->paginate(16);
      $page = "Tag" . ' ' . "/" . ' ' . $tag->name;
      $name = $tag->name;
      return view("articles.pages.search",compact('posts','page','name'));
    }

    public function filter(Request $request)
    {  $request->validate(['q'=>['string'],['aplha']]);
       $posts = Article::where('status',1)->where('title','like',"%{$request->input("q")}%")->orderBy('created_at','DESC')->paginate(16);
      $page = "Results";
      return view("articles.pages.search",compact('posts','page'));
    }
}
