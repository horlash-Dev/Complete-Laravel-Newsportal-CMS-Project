<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\subCategory;

class CategoriesPanel extends Controller
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
    {   $allcategory = Category::with("article_category","subCategory")->get();
       $page_name = "All Categories";
       return view('admin.dashboard.categories.view', compact("allcategory","page_name"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCategory()
    {   $page_name = "ADD NEW CATEGORY";
        return view('admin.dashboard.categories.create',compact('page_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCategory(Request $request)
    {
        $request->validate(["name"=>"required|string","description"=>"string"]);
        Category::create(["name" => $request->input("name"),"description"=>$request->input("description"),"status"=> 0]);
        return response()->json(["category_submitted"=>"category_successfully!","url"=>"/is_admin/categories"]);   
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

    public function checkStatus(Category $category)
    {
        if ($category->status == 1) {
            $category->status = 0;
        }else{
            $category->status = 1;
        }
        $category->save();
        return   redirect()->back()->with("check-status","category" ." * ". $category->name ." * ". "status changed!");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editCategory(Category $category)
    {   $page_name = $category->name;
        return view('admin.dashboard.categories.modify',compact('page_name',"category"));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCategory(Request $request, Category $category)
    {
        $request->validate(["name"=>"required|string","description"=>"string"]);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return response()->json(["category_updated"=>"category_modify_successfully!","url"=>route("edit-category",[$category->slug])]);
    }

    public function articles(Category $category)
    {    $page = $category->name;
     $posts=   $category->article_category()->orderBy('created_at','DESC')->get();
     return view('admin.dashboard.categories.posts',compact("posts","page"));
    }

    public function subcategory(Category $category)
    {   $page = $category->name;
     $posts=   $category->subcategory;
     return view('admin.dashboard.categories.subcategory',compact("posts","page"));
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyCategory(Category $category)
    {   $uncat = Category::where("slug", "uncategorized")->firstorfail();
        $post = $category->article_category;
        $child= $category->subCategory->map(function ($data)
        {
            $sub= subCategory::where("slug", $data->slug)->firstorfail();
            $sub->parentCategory()->dissociate();
            $sub->save();
        });
        $category->delete();
        $uncat->article_category()->attach($post);
      return redirect()->back()->with("trashed", "Category Trashed Successfully!");
             
    }
}
