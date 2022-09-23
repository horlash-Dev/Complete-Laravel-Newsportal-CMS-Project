<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Tags\Tag;

class ArticleTags extends Controller
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
    {
        //if (auth()->user()->type === 1 && auth()->user()->hasRole("moderator")) {
            $alltags = Tag::orderBy("created_at","DESC")->get();
            $page_name = "Tags Panel";
            return view('admin.dashboard.articleTags.view', compact("alltags","page_name"));
         //}
         //return abort(403);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createTag()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeTag(Request $request)
    {
        $request->validate(["name"=>"required|array"]);
        foreach ($request->name as $tags) {
          $tag =  (new Tag);
          $tag->name = $tags;
          $tag->save();
        }
        return response()->json(["Tags_submitted"=>"Tags_successfully!","url"=>url("/is_admin/tags")]);
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
    public function editTag(Tag $tags)
    { $page_name =  $tags->name;
       return view('admin.dashboard.articleTags.modify',compact("tags",'page_name'));  
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateTag(Request $request, Tag $tags)
    {   $request->validate(["name"=>"required|string"]);
        $tags->name = $request->name;
        $tags->save();
        return response()->json(["Tags_updated"=>"Tags_modify_successfully!","url"=>route("edit-tags",[$tags->slug])]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyTag(Tag $tags)
    {  
        $tags->delete();
        return redirect()->back()->with("trashed", "Tag Trashed Successfully!");
  
    }
}
