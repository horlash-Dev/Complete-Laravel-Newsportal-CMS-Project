<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\subCategory;
use App\Category;

class subCategoriesPanel extends Controller
{

    function __construct()
    {
       return  $this->middleware(['auth','permission:master admin|Category Add|Category List|Category Update|Category Delete']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $allcategory = subCategory::with("article_subCategory","parentCategory")->get();
        $page_name = "All Child Categories";
        return view('admin.dashboard.subcategories.view', compact("allcategory","page_name"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCategory()
    {   $list= Category::pluck("name","id");
        $page_name = "ADD NEW CATEGORY";
        return view('admin.dashboard.subcategories.create',compact("list",'page_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCategory(Request $request)
    {
        $request->validate(["name"=>"required|string","parents_category"=>"required|string","description"=>"string"]);
        $category= (new Category)->where("id", $request->parents_category)->firstorfail();
       $category->subCategory()->create(["name" => $request->input("name"),"description"=>$request->input("description"),"status"=> 0]);
        return response()->json(["sub_category_submitted"=>"sub_category_successfully!","url"=>"/is_admin/sub/categories"]);   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editCategory(subCategory $category)
    {
        $list= Category::pluck("name","id");
        $page_name = $category->name;
        return view('admin.dashboard.subcategories.modify',compact('page_name',"category","list"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function checkStatus(subCategory $category)
    {
        if ($category->status == 1) {
            $category->status = 0;
        }else{
            $category->status = 1;
        }
        $category->save();
        return   redirect()->back()->with("check-status","category" ." * ". $category->name ." * ". "status changed!");
    }
    
    public function updateCategory(Request $request, subCategory $category)
    {
        $request->validate(["name"=>"required|string","description"=>"string","parents_category"=>"required|string"]);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->parents_category = $request->parents_category;
        $category->save();
       return response()->json(["sub_category_updated"=>"sub_category_modify_successfully!","url"=>route("edit-sub-category",[$category->slug])]);
  
    }

    public function articles(subCategory $category)
    { $page = $category->name;
     $posts=   $category->article_subCategory()->orderBy('created_at','DESC')->get();
     return view('admin.dashboard.subcategories.posts',compact("posts","page"));
    }

    public function category(subCategory $category)
    {   $page = $category->name;
     $posts=   $category->parentCategory;
     return view('admin.dashboard.subcategories.category',compact("posts","page"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyCategory(subCategory $category)
    {   $uncat = Category::where("slug", "uncategorized")->firstorfail();
        $post = $category->article_subCategory;
        $child= $category->parentCategory()->dissociate();
        $category->delete();
        $uncat->article_category()->attach($post);
      return redirect()->back()->with("trashed", "Category Trashed Successfully!");
             
    
    }
}
