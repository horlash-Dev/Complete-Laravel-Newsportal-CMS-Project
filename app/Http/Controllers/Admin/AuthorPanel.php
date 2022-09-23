<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Controller;
use App\Mail\Welcome;
use App\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AuthorPanel extends Controller
{       
    public  $total_user;

    function __construct()
    {
       return  $this->middleware(['auth','permission:master admin','role:Administrator']);
    }

    public function index()
    {  $this->authorize("performAction",auth()->user());
        $alluser = User::with(["permissions","roles"])->where("type", 2)->orderBy("created_at","DESC")->get();
        $page_name = "AUTHORS Panel";
        $this->total_user= $alluser;
       // $role= $alluser->roles()->pluck("name");
        return view('admin.dashboard.author.view',compact("alluser","page_name"));
    }

    public function role(User $user)
    {  
      $page_name = "EDIT USER ROLE";
        $roles = Role::latest()->pluck("name","id");
      $role = $user->roles()->pluck("name","id");
        return view('admin.dashboard.author.modify',compact("user","role","roles",'page_name'));
    
    }
    public function showPermission(User $user)
    {   $page_name = "DIRECT USER PERMISSIONS";
         $permission = Permission::latest()->pluck("name","id");
        return view('admin.dashboard.author.change',compact("user","permission",'page_name'));
    }
    public function addrole(Request $request,User $user)
    {
        $user->syncRoles($request->role);
        foreach ($user->roles as $id) {}
        return redirect()->back()->with("r-changed", $user->username." is now A ".$id->name);
    }
    public function permission(Request $request,User $user)
    {
        $user->syncPermissions($request->permissions);
        return redirect()->route("u-permission")->with("p-changed", $user->username." Permission Changed!");
    }
    public function permissions()
    {
            $alluser = User::has("permissions")->where("type", 2)->orderBy("created_at","DESC")->get();
            $page_name = "AUTHORS Direct Permission Panel";
            return view('admin.dashboard.author.permission',compact("alluser","page_name"));
    }
    public function trash(User $user)
    {   $user->delete();
        return redirect()->back()->with("trashed", "User Trashed Successfully!");
    }

    public function registerForm(User $user)
    { $page_name = "USER REGISTERATION FORM";
         $this->authorize("performAction",auth()->user());
        return view("auth.author",compact('page_name'));
    }

    public function register(Request $request)
    {    $this->authorize("performAction",auth()->user());
         $request->validate(["username"=>"required|string","email"=>"email|string","password"=>"string"]);
        $hash = 
        Hash::make($request->password);
        $user = User::create(["username"=>$request->input('username'),"email"=>$request->input('email'),"password"=>$hash,"type"=>2]);
        $user->assignRole("Author");
        $user->sendEmailVerificationNotification($user->username);
        $when = now()->addMinutes(1);
        Mail::to($user)
        ->later($when,new Welcome($user,$request->password));
        return redirect()->route("all-author")->with("user_added", "New User Created Successfully!");
    }

    public static function CountNo()
    {
        return $alluser = User::with(["permissions","roles"])->where("type", 2)->orderBy("created_at","DESC")->get(); 
    }

    public static function CountMail()
    {
        return $alluser = User::with(["permissions","roles"])->where("type", 2)->where('email_verified_at',null)->orderBy("created_at","DESC")->get(); 
    }
    

}
