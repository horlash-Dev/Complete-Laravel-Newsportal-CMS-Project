<?php

namespace App\Http\Controllers\admin;

use App\Comment;
use App\Http\Controllers\Admin\Traits\Memes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentPanel extends Controller
{   
    function __construct()
    {
       return  $this->middleware(['auth','permission:master admin|Comment View|Comment Reply|Comment Approval|Comment Delete']);
    }

    public function index()
    {   $allcomment = Comment::where("status", 1)->orderBy("created_at","DESC")->get();
        $page_name = "Approved Comment Panel";
        return view('admin.dashboard.comments.approve',compact("allcomment","page_name"));
    }
    public function publish()
    {   $allcomment = Comment::where("status", 0)->orderBy("created_at","DESC")->get();
        $page_name = "UNApproved Comment Panel";
        return view('admin.dashboard.comments.unapprove',compact("allcomment","page_name"));
    }
public function editcomment($comments)
{   $comment = Comment::where("username", $comments)->firstorFail();
    return view('admin.dashboard.comments.modify',compact("comment"));
}
    public function updatecomment(Request $request,$comments)
    { $request->validate(["username"=>"required|string","body"=>"string"]);
        $comment = Comment::where("username", $comments)->firstorFail();
        $comment->username = $request->username;
        $comment->body = clean($request->body);
        $comment->save();
        return redirect()->route("comment-edit", [$comment->username])->with("c-success","Comment Modified!");
    }
    public function approve($comments)
    {   $comment = Comment::where("username", $comments)->firstorFail();
        Memes::checkStatus($comment);
        return   redirect()->back()->with("check-status","Comment" ." * ". $comment->body ." * ". "status changed!");
    }

    public function destroyComment($comments)
    {    $comment = Comment::where("username", $comments)->firstorFail();
         $comment->commentable()->dissociate();
         $comment->reply()->update(["sub_comment_type"=>null,"sub_comment_id"=>null]);
        $comment->delete();
        return redirect()->back()->with("trashed", "Comment Trashed Successfully!");
    }

    public static function CountNo($d)
    {
      return Comment::where("status", $d)->get();
    }

}
