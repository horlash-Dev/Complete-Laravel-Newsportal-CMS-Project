<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
class Settings extends Controller
{  
   function __construct()
   {
      return  $this->middleware(['auth','role_or_permission:Administrator|master admin']);
   }
    public function index()
    {
    $page = "Site Description";
    $title = Setting::where("name","site_title")->firstorFail();
    $title2 = Setting::where("name","description")->firstorFail();
    $fav = Setting::where("name","site_favicon")->firstorFail();
    $logo = Setting::where("name","site_logo")->firstorFail();
     return view('admin.dashboard.site-info',compact("title","title2","logo","fav","page"));
    }
    public function general(Request $request)
    {
    if ($request->has("name")) {   
        $request->validate(['name'=>["string"]]);
        $title = Setting::where("name","site_title")->firstorFail();
        $title->value = $request->input("name");
        $title->save();
    }
    if ($request->has("name_desc")) {   
      $request->validate(['name_desc'=>["string"]]);
      $title = Setting::where("name","description")->firstorFail();
      $title->value = $request->input("name_desc");
      $title->save();
  }
    if ($request->hasFile("site_logo")) {       
        $request->validate(['site_logo'=>["image","mimes:png","max:1000"]]);
        $img =  $request->file('site_logo');
       $pic = Setting::where("name","site_logo")->firstorFail();
        if ($img->isValid()) {
            $old = $pic->image;
           $ext = $img->extension();
           $pic->image =  $thumb_img = "site_logo" . "." . $ext;
            Image::make($img)->fit(180,80,function($cons){$cons->upsize();})->save(storage_path('app/public/files/'.$thumb_img)); 
            if ($old != "") {
            unlink(storage_path('app/public/files/'.$old));
            }
            $pic->save();
        }  
    }

    if ($request->hasFile("site_fav")) {
        $request->validate(['site_fav'=>["image","mimes:png","max:1000"]]);
        $img =  $request->file('site_fav');
       $pic = Setting::where("name","site_favicon")->firstorFail();
        if ($img->isValid()) {
            $old = $pic->image;
           $ext = $img->extension();
           $pic->image =  $thumb_img = "site_fav" . "." .  $ext;
            Image::make($img)->fit(80,80,function($cons){$cons->upsize();})->resize(80,80, function($con){$con->aspectRatio();})->save(storage_path('app/public/files/'.$thumb_img)); 
            if ($old != "") {
            unlink(storage_path('app/public/files/'.$old));
            }
            $pic->save();
        }
    }
    return redirect()->back()->with("s-changed","Description Updated Succesfully");
    }
    public function menu()
    {
       // $this->authorize("performAction",auth()->user());
        $page = "Menu Settings";
      $menu_1 =   $this->setting("menu_field_1")->pluck("value","value");
      $menu_2 = $this->setting("menu_field_2")->pluck("value","value");
      $menu_3 = $this->setting("menu_field_3")->pluck("value","value");
      $menu_4 = $this->setting("menu_field_4")->pluck("value","value");
      $menu_5 = $this->setting("menu_field_5")->pluck("value","value");
      $menu_6 = $this->setting("menu_field_6")->pluck("value","value");
      $allcategory = Category::pluck("name","name");
    return view('admin.dashboard.menu',compact("allcategory","page","menu_6","menu_5","menu_4","menu_3","menu_2","menu_1"));
    }

    public function Savemenu(Request $request)
    {
        $this->authorize("performAction",auth()->user());
    
        if ($request->menu_1 != null) {
            $data = $this->setting("menu_field_1")->firstorFail();
            $data->value = $request->menu_1;
            $data->save();
         }
         if ($request->menu_2 != null) {
            $data = $this->setting("menu_field_2")->firstorFail();
            $data->value = $request->menu_2;
            $data->save();
         }
         if ($request->menu_3 != null) {
            $data = $this->setting("menu_field_3")->firstorFail();
            $data->value = $request->menu_3;
            $data->save();
         }
         if ($request->menu_4 != null) {
            $data = $this->setting("menu_field_4")->firstorFail();
            $data->value = $request->menu_4;
            $data->save();
         }
         if ($request->menu_5 != null) {
            $data = $this->setting("menu_field_5")->firstorFail();
            $data->value = $request->menu_5;
            $data->save();
         }
         if ($request->menu_6 != null) {
            $data = $this->setting("menu_field_6")->firstorFail();
            $data->value = $request->menu_6;
            $data->save();
         }
         return redirect()->back()->with("s-changed","Menu Updated Succesfully");     
        
    }
    public function sections()
    {
    $this->authorize("performAction",auth()->user());
    $page = "Homepage Settings";
    $featured = Setting::where("name","featured_section")->pluck("total_post","total_post");
    $trending = Setting::where("name","trending_section")->pluck("total_post","total_post");
    $trending_view = Setting::where("name","trending_section")->pluck("total_views","total_views");
    $category = Setting::where("name","category_news_section")->pluck("total_post","total_post");
    $category_1 = Setting::where("name","category_field_1")->pluck("value","value");
    $category_2 = Setting::where("name","category_field_2")->pluck("value","value");
    $category_3 = Setting::where("name","category_field_3")->pluck("value","value");
    $category_4 = Setting::where("name","category_field_4")->pluck("value","value");
    $allcategory = Category::pluck("name","name");
    $sidebar_no = Setting::where("name","sidebar_section")->pluck("total_post","total_post");
    $sidebar_view = Setting::where("name","sidebar_section")->pluck("total_views","total_views");


    return view('admin.dashboard.sections',compact("featured","trending","trending_view","category","allcategory",
"category_1","category_2","category_3","category_4","sidebar_no","sidebar_view","page"));
    
    }
    public function setting($data)
    {
        return Setting::where("name",$data);
    }

    public function homepage(Request $request)
    {
    $this->authorize("performAction",auth()->user());
    if ($request->category_no != null) {
       $data = $this->setting("category_news_section")->firstorFail();
       $data->total_post = $request->category_no;
       $data->save();
    }
    if ($request->category_1 != null) {
        $data = $this->setting("category_field_1")->firstorFail();
        $data->value = $request->category_1;
        $data->save();
     }
     if ($request->category_2 != null) {
        $data = $this->setting("category_field_2")->firstorFail();
        $data->value = $request->category_2;
        $data->save();
     }
     if ($request->category_3 != null) {
        $data = $this->setting("category_field_3")->firstorFail();
        $data->value = $request->category_3;
        $data->save();
     }
     if ($request->category_4 != null) {
        $data = $this->setting("category_field_4")->firstorFail();
        $data->value = $request->category_4;
        $data->save();
     }
    if ($request->featured_no != null) {
        $data = $this->setting("featured_section")->firstorFail();
        $data->total_post = $request->featured_no;
        $data->save();
     }
    if ($request->trending_no != null || $request->trending_view != null) {
        $data = $this->setting("trending_section")->firstorFail();
        $data->total_post = $request->trending_no;
        $data->total_views = $request->trending_view;
        $data->save();
     }
     if ($request->sidebar_no != null || $request->sidebar_view != null) {
        $data = $this->setting("sidebar_section")->firstorFail();
        $data->total_post = $request->sidebar_no;
        $data->total_views = $request->sidebar_view;
        $data->save();
     }
     return redirect()->back()->with("s-changed","Homepage Description Updated Succesfully");
    }
}
