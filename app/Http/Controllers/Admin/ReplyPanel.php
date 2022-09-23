<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Admin\Traits\Memes;
use App\Http\Controllers\Controller;
use App\Reply;
use Illuminate\Http\Request;

class ReplyPanel extends Controller
{   
    function __construct()
    {
       return  $this->middleware(['auth','permission:master admin|Comment View|Comment Reply|Comment Approval|Comment Delete']);
    }
    
    public function index()
    {   $allreply = Reply::where("status", 1)->orderBy("created_at","DESC")->get();
        $page_name = "Approved Reply Panel";
        return view('admin.dashboard.reply.approve',compact("allreply","page_name"));
    }
    public function publish()
    {     $allreply = Reply::where("status", 0)->orderBy("created_at","DESC")->get();
        $page_name = "UNApproved Reply Panel";
        return view('admin.dashboard.reply.unapprove',compact("allreply","page_name"));
    }
public function editcomment($comments)
{   $comment = Reply::where("username", $comments)->firstorFail();
    return view('admin.dashboard.reply.modify',compact("comment"));
}
    public function updatecomment(Request $request,$comments)
    { $request->validate(["username"=>"required|string","body"=>"string"]);
        $comment = Reply::where("username", $comments)->firstorFail();
        $comment->username = $request->username;
        $comment->body = $request->body;
        $comment->save();
        return redirect()->route("rp-edit", [$comment->username])->with("c-success","Reply Modified!");
    }
    public function approve($comments)
    {   $comment = Reply::where("username", $comments)->firstorFail();
        Memes::checkStatus($comment);
        return   redirect()->back()->with("check-status","Reply" ." * ". $comment->body ." * ". "status changed!");
    }

    public function destroyComment($comments)
    {    $comment = Reply::where("username", $comments)->firstorFail();
         $comment->sub_comment()->dissociate();
        $comment->delete(); 
        return redirect()->back()->with("trashed", "Reply Trashed Successfully!");
    }

}
