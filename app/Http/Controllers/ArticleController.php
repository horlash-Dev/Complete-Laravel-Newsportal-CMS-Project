<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Repository\Articles;
use App\Article;
use Image;
use App\Category;
use App\Setting;
use App\subCategory;
use Illuminate\Support\Str;
use Spatie\Tags\Tag;

class ArticleController extends Controller
{   
    function __construct()
    {
       return  $this->middleware(['auth','permission:master admin|Post List|Post Update|Post Add'])->except('index','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
      $post_data = Articles::all()->take($this->collection("trending_section")->firstorFail()->total_post);
      //$banner = (new Article)->banner($post_data);
      $trend = $this->collection("trending_section")->firstorFail()->value;
      $trend2 = $this->collection("featured_section")->firstorFail()->value;
      $featured = Articles::Featured($this->collection("featured_section")->firstorFail()->total_post);
      $category_sort_1 =  Articles::category_sort($this->collection("category_field_1")->firstorFail()->value,$this->collection("category_news_section")->firstorFail()->total_post);
      $category_sort_1_name = $this->collection("category_field_1")->firstorFail()->value;
      $category_sort_2 =  Articles::category_sort($this->collection("category_field_2")->firstorFail()->value,$this->collection("category_news_section")->firstorFail()->total_post);
      $category_sort_2_name = $this->collection("category_field_2")->firstorFail()->value;
      $category_sort_3 =  Articles::category_sort($this->collection("category_field_3")->firstorFail()->value,$this->collection("category_news_section")->firstorFail()->total_post);
      $category_sort_3_name = $this->collection("category_field_3")->firstorFail()->value;
      $category_sort_4 =  Articles::category_sort($this->collection("category_field_4")->firstorFail()->value,$this->collection("category_news_section")->firstorFail()->total_post);
      $category_sort_4_name = $this->collection("category_field_4")->firstorFail()->value;
      return view("homepage.home.index",compact('post_data','trend','trend2','featured','category_sort_1','category_sort_1_name','category_sort_2','category_sort_2_name',
      'category_sort_3','category_sort_3_name','category_sort_4','category_sort_4_name'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  $category= Category::pluck("name");
        $subcategory= subCategory::pluck("name");
        $tags= Tag::pluck("name","id");
        $page_name = 'PUBLISH NEW POST';
        return view('admin.dashboard.article.publish',compact('tags','page_name','category','subcategory'));
    }

    public function collection($data)
    {
        return Setting::where("name",$data);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Article $save)
    { 

        $request->validate(['title'=>["required","string"], 'categories'=>["required","string"],'add_tags'=>["required","array"],
        'post_image'=>["required","image","mimes:jpeg,png,gif","max:1000"],'description'=>["required","string"]]);
        $save->title = clean($request->title);
        $save->description = clean($request->description);
        $save->featured = 0;
        $save->view_count = 0;
        $save->status = 1;
        $save->created_by = auth()->id();
        if ($request->hasFile('post_image')) {
            $img = $request->file('post_image');
            $ext = $img->extension();
            $save->main_img =  $main_img = "main_img". time() . "." . $ext;
            $save->banner_img =  $banner_img = "banner_img". time() . "." . $ext;
            $save->mini_img =  $mini_img = "mini_img". time() . "." . $ext;
            $save->thumb_img =  $thumb_img = "thumb_img". time() . "." .  $ext;
            Image::make($img)->fit(1200,600, function($cons){$cons->upsize();})->save(storage_path('app/public/articles_img/'.$main_img));
            Image::make($img)->fit(600,600, function($cons){$cons->upsize();})->save(storage_path('app/public/articles_img/'.$banner_img));
            Image::make($img)->fit(600,600,function($cons){$cons->upsize();})->save(storage_path('app/public/articles_img/'.$mini_img));
            Image::make($img)->fit(230,200, function($cons){$cons->upsize();})->save(storage_path('app/public/articles_img/'.$thumb_img));
        //     if ($request->file('post_image')->isValid() == false) {
        //         return redirect()->back()->with('mime', 'Oops! something went wrong try again..');
        //         }
        //         if ($request->file('post_image')->getSize() > 3000000) {
        //             return redirect()->back()->with('mime', 'file size too large 3mb supported!');
        //         }     
        //         $mime= ['jpeg',"png",'gif'];
        //    if (in_array($ext, $mime)) {
           // }else{return redirect()->back()->with("mime","inavlid extension or not supported!");}
        }else{
            $save->main_img = '';
            $save->mini_img = '';
            $save->thumb_img ='';
            $save->banner_img ='';
        }
        $save->save();
        if ($request->has("categories")) {
            $url = strtolower(Str::slug($request->categories));
           $newcategory = Category::where("slug",$url)->pluck('id');
           $newsubcategory =  subCategory::where("slug",$url)->pluck('id');
           if ($newcategory) {
               $save->category()->attach($newcategory);
           }if($newsubcategory){$save->subCategory()->attach($newsubcategory);}
        }
        if ($request->has("add_tags")) {
            $save->tags()->attach($request->add_tags);
        }
        return response()->json(["success"=>"article-published-successfully!","url"=>"/is_admin/all/articles"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {   $article->status != 1 ? abort(404) : null;
        $article->increment("view_count");
        $page = $article->title;
        $article->load(["createdBy","category","subCategory","comments"]);
        return view('articles.details',compact("article","page"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {   $article->with(["category","subCategory"]);
        $page_name = $article->title;
        if (count($article->category) > 0) {
        $values= $article->category()->pluck("name")->toArray();
        $value= implode(" ",$values);
    }else{
         $values= $article->subCategory()->pluck("name")->toArray();
         $value= implode(" ",$values);
   }
        $category= Category::pluck("name");
        $subcategory= subCategory::pluck("name");
        $tags= Tag::pluck("name","id");
        return view('admin.dashboard.article.edit',compact('page_name','tags','value','article','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $save)
    { 

        $request->validate(['title'=>["required","string"], 'categories'=>["required","string"],
        'add_tags'=>["array"], 'post_image'=>["image","mimes:jpeg,png,gif","max:1000"],'description'=>["required","string"]]);
        $save->title = clean($request->title);
        $save->description = clean($request->description);
        if ($request->hasFile('post_image')) {
        //     if ($request->file('post_image')->isValid() == false) {
        //         return redirect()->back()->with('mime', 'Oops! something went wrong try again..');
        //         }
        //         if ($request->file('post_image')->getSize() > 3000000) {
        //             return redirect()->back()->with('mime', 'file size too large 3mb supported!');
        //         }
        //         $mime= ['jpeg',"png",'gif'];
        //    if (in_array($ext, $mime)) {
                 //   }else{return redirect()->back()->with("mime","inavlid extension or not supported!");}
            $img = $request->file('post_image');
            $ext = $img->extension();
            $main= $save->main_img;
            $mini= $save->mini_img;
            $ban= $save->banner_img;
            $thumb= $save->thumb_img;
            $save->main_img =  $main_img = "main_img". time() . "." . $ext;
            $save->banner_img =  $banner_img = "banner_img". time() . "." . $ext;
            $save->mini_img =  $mini_img = "mini_img". time() . "." . $ext;
            $save->thumb_img =  $thumb_img = "thumb_img". time() . "." .  $ext;
            Image::make($img)->fit(1200,600, function($cons){$cons->upsize();})->save(storage_path('app/public/articles_img/'.$main_img));
            Image::make($img)->fit(600,600, function($cons){$cons->upsize();})->save(storage_path('app/public/articles_img/'.$banner_img));
            Image::make($img)->fit(600,600,function($cons){$cons->upsize();})->save(storage_path('app/public/articles_img/'.$mini_img));
            Image::make($img)->fit(230,200, function($cons){$cons->upsize();})->save(storage_path('app/public/articles_img/'.$thumb_img));
            unlink(storage_path('app/public/articles_img/'.$main));
            unlink(storage_path('app/public/articles_img/'.$ban));
            unlink(storage_path('app/public/articles_img/'.$thumb));
            unlink(storage_path('app/public/articles_img/'.$mini));   
        }
        $save->save();
        if ($request->has("categories")) {
            $url = strtolower(Str::slug($request->categories));
           $newcategory = Category::where("slug",$url)->pluck('id');
           $newsubcategory =  subCategory::where("slug",$url)->pluck('id');
           if (count($newcategory) > 0) {
            $save->subCategory()->detach();
             $save->category()->detach();
             $save->category()->attach($newcategory);
            }
        if(count($newsubcategory) > 0){
            $save->category()->detach();
            $save->subCategory()->detach();
            $save->subCategory()->attach($newsubcategory);
        }
        }
        if ($request->has("add_tags")) {
            $save->tags()->detach();
            $save->tags()->attach($request->add_tags);
        }
        return response()->json(["updated"=>"article-modify-successfully!","url"=>route("article.show",[$save->slug])]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */

}
