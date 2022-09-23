<?php

namespace App\Http\Controllers\admin;

use App\Article;
use App\Http\Controllers\Admin\Traits\Memes;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\Articles as RepositoryArticles;
use Illuminate\Http\Request;

class ArticlesPanel extends Controller
{   use Memes;
    function __construct()
    {
       return  $this->middleware(['auth','permission:master admin|Post Delete|Post List']);
    }
    public function index()
    {   //if (auth()->user()->type === 1 && auth()->user()->hasRole("moderator")) {
       $allpost =  Article::with(["createdBy","category","subCategory"])->orderBy('created_at','DESC')->get();
       $page_name = "All Articles";
       return view('admin.dashboard.article.view', compact("allpost","page_name"));
    //}
    //return abort(403);
    }

    public function checkStatus(Article $article)
    {  Memes::checkStatus($article);
        return   redirect()->back()->with("check-status","Article" ." * ". $article->title ." * ". "status changed!");
    } 
    
    public function hotnews(Article $article)
    {  Memes::hot_news($article);
        return   redirect()->back()->with("check-status","Article" ." * ". $article->title ." * ". "featured Status Changed!");
    } 

    public function trashArticles(Article $article)
    {   $article->status = 0;
        $article->save();
        $article->delete();
        return redirect()->back()->with("trashed", "Article Trashed Successfully!");
    }

    public static function CountNo($d)
    {
      return Article::where("status", $d)->get(['title','mini_img','created_by','status','slug']);
    }
}
