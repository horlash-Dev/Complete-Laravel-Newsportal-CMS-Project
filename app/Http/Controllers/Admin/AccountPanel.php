<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Image;
class AccountPanel extends Controller
{   function __construct()
{
    //return $this->authorize("users-profile");
}
    public function profile(User $user)
    {   $page_name =  "Profile" . ' >> ' . $user->username; 
        $this->authorize("profile",$user);
        $user->load(["articles","permissions","roles"]);
        return view("admin.dashboard.profile",compact("user","page_name"));
    }

    public function editProfile(User $user)
    {   $page_name = "Account Settings"; 
        $this->authorize("profile",$user);
        return view("admin.dashboard.account-setting",compact("user","page_name"));
    }
    public function updateBio(Request $request, User $user)
    {    $this->authorize("profile",$user);
         $request->validate(["mobile_no"=>"string","bio"=>"string"]);
        $user->bio = $request->bio;
        $user->gender = $request->gender;
        $user->mobile_no = $request->mobile_no;
        $user->save();
        return redirect()->route("u-edit-profile", $user->username)->with("u-details", "Account Details Updated Successfully!");
    }
    public function updateProfile(Request $request, User $user)
    {    $this->authorize("profile",$user);
        $request->validate(["username"=>"required|string","email"=>"email","fullname"=>"string"]);
        $user->username = $request->username;
        if ($request->email != $user->email) {
            $user->email_verified_at = null;
            $user->email = $request->email;
            $user->sendEmailVerificationNotification($user->username);
        }
        if ($request->hasFile("avatar")) {
            $request->validate(['avatar'=>["image","mimes:jpeg,png,gif","max:1000"]]);
            $img =  $request->file('avatar');
            if ($img->isValid()) {
                $old = $user->avatar;
               $ext = $img->extension();
                $user->avatar =  $thumb_img = "avatar". time() . "." .  $ext;
                Image::make($img)->fit(400,400,function($cons){$cons->upsize();})->save(storage_path('app/public/avatar/'.$thumb_img)); 
               if ($old != "") {
                unlink(storage_path('app/public/avatar/'.$old));
               }
            }
        }
        $user->fullname = $request->fullname;
        $user->address = $request->address;
        $user->save();
        return redirect()->route("u-edit-profile", $user->username)->with("u-details", "Account Details Updated Successfully!");
    }
    public function updatePassword(Request $request, User $user){
        $this->authorize("profile",$user);
        $request->validate(["password_old"=>"required|string","password"=>"required|string|confirmed","password_confirmation"=>"required|string",]);
    
        if (Hash::check($request->password_old, auth()->user()->password)) {
        $save =  $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route("u-profile", $user->username)->with("u-password", "Password Details Changed!");
     }else {
        return redirect()->back()->with("u-password-error", "Invalid Password!");
     }
  }
}
