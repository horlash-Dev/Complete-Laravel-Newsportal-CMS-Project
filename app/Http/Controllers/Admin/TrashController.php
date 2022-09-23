<?php

namespace App\Http\Controllers\admin;

use App\Article;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class TrashController extends Controller
{   
    function __construct()
    {
       return  $this->middleware(['auth','permission:master admin','role:Administrator']);
    }
    public function articles()
    {
        $this->authorize("performAction",auth()->user());
         $allpost = Article::with(["createdBy","comments"])->onlyTrashed()->orderBy("deleted_at","DESC")->get();
        $page_name = "Trashed Articles Panel";
        return view('admin.dashboard.trash.article',compact("allpost","page_name"));
     
    }

    public function users()
    {
        $this->authorize("performAction",auth()->user());
        $alluser = User::onlyTrashed()->where("type", 2)->orderBy("deleted_at","DESC")->get();
        $page_name = "Trashed Users Panel";
        return view('admin.dashboard.trash.user',compact("alluser","page_name"));
     
    }

    public function permissions()
    {
        $this->authorize("performAction",auth()->user());
         $allper = Permission::with(["roles"])->onlyTrashed()->orderBy("deleted_at","DESC")->get();
        $page_name = "Trashed Permission Panel";
        return view('admin.dashboard.trash.permission',compact("allper","page_name"));
    }

    public function roles()
    {
        $this->authorize("performAction",auth()->user());
         $allrole = Role::with(["permissions"])->onlyTrashed()->orderBy("deleted_at","DESC")->get();
        $page_name = "Trashed Roles Panel";
        return view('admin.dashboard.trash.roles',compact("allrole","page_name"));
    }

    public function deleteArticle(Request $request, $data)
    {
        $this->authorize("performAction",auth()->user());
        $article = Article::onlyTrashed()
        ->where("slug",$data)->firstOrFail();
        if ($article->has("createdBy")) {
           $article->createdBy()->dissociate();
        } 
        if ($article->has("comments")) {
            $article->comments()->update(["commentable_type"=>null,"commentable_id"=>null]);
         }
         if ($article->has("category")) {
            $article->category()->detach();
        }  
        if ($article->has("subCategory")) {
            $article->subCategory()->detach();
        }     
        if ($article->has("tags")) {
            $article->tags()->detach();
        }     
        $article->forceDelete(); 
        return redirect()->back()->with("post-deleted", $article->title . " Deleted Successfully!"); 
    }

    public function deletepermission($data)
    {
        $this->authorize("performAction",auth()->user());
        $permission = Permission::onlyTrashed()->where("slug", $data)->firstOrFail();
        $permission->roles()->detach();
        $permission->users()->detach();
        $permission->forceDelete();
        return redirect()->back()->with("per-deleted", $permission->username . " Deleted Successfully!");
    }

    public function deleteroles($data)
    {
        $this->authorize("performAction",auth()->user());
        $roles = Role::onlyTrashed()->where("slug", $data)->firstOrFail();
        $roles->permissions()->detach();
        $roles->users()->detach();
        $roles->forceDelete();
        return redirect()->back()->with("role-deleted", $roles->username . " Deleted Successfully!");
    }

        public function deleteUser($data)
    {
        $this->authorize("performAction",auth()->user());
        $user = User::onlyTrashed()->where("type", 2)
        ->where("username",$data)->firstOrFail();
        if ($user->has("permissions")) {
            $user->permissions()->detach();
        } 
        if ($user->has("roles")) {
            $user->roles()->detach();
        } 
        if ($user->has("articles")) {
           $custom =  User::where("type",1)->firstorfail(['id']);
            foreach ($user->articles as $post) {
                $post->created_by = $custom->id;
                $post->save();
            }
        } 
        if ($user->has("comments")) {
            foreach ($user->comments as $comment) {
                $comment->created_by = null;
                $comment->save();
            }
        } 
        if ($user->has("reply")) {
            foreach ($user->reply as $comment) {
                $comment->created_by = null;
                $comment->save();
            }
        }
        $user->forceDelete(); 
        return redirect()->back()->with("f-deleted", $user->username . " Deleted Successfully!");
    }
}
