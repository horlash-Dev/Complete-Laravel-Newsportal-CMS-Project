<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Article;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Article $article)
    {  $request->validate(["username"=>"required|string","body"=>"required|string"]);
        $article->comments()->create(["username"=>clean($request->username),"body"=>clean($request->body)]);
       return response()->json(["comment_added"=>"comment-success-successfully!","url"=>route("article.show",[$article->slug])]);
   
    }

}
