<?php

namespace App\Http\Controllers;

use App\Reply;
use Illuminate\Http\Request;
use App\Comment;

class ReplyController extends Controller
{

    public function store(Request $request,Comment $comment)
    {
        $request->validate(["username"=>"required|string","body"=>"required|string"]);
        $comment->reply()->create(["body"=> clean($request->body),"username"=>clean($request->username)]);
        return response()->json(["reply_added"=>"reply-saved-successfully!","url"=>route("article.show",[$comment->commentable->slug])]);
   
    }

}
