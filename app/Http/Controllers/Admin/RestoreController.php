<?php

namespace App\Http\Controllers\admin;

use App\Article;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RestoreController extends Controller
{
    function __construct()
    {
       return  $this->middleware(['auth','permission:master admin','role:Administrator']);
    }
    
    public function users(Request $request,$data)
    {   
        $this->authorize("performAction",auth()->user());
        $user = User::onlyTrashed()->where("type", 2)
        ->where("username",$data)->firstOrFail(); 
        $user->restore();
        return redirect()->back()->with("restored", "User " . $user->username . " Restored Successfully!");
    }

    public function articles(Request $request, $data)
    {
        $this->authorize("performAction",auth()->user());
        $article = Article::onlyTrashed()
        ->where("slug",$data)->firstOrFail();
        $article->restore();
        return redirect()->back()->with("restored", $article->title . " Restored Successfully!");
    }

    
    public function permission(Request $request, $data)
    {
        $this->authorize("performAction",auth()->user());
        $permission = Permission::onlyTrashed()
        ->where("slug",$data)->firstOrFail();
        $permission->restore();
        return redirect()->back()->with("restored", $permission->name . " Restored Successfully!");
    }

    public function roles(Request $request, $data)
    {
        $this->authorize("performAction",auth()->user());
         $role = Role::onlyTrashed()
        ->where("slug",$data)->firstOrFail();
        $role->restore();
        return redirect()->back()->with("restored", $role->name . " Restored Successfully!");
    }
}
