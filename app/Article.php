<?php

namespace App;

use Carbon\Carbon as CarbonCarbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str as IlluminateStr;
use Spatie\Tags\Tag;
use Spatie\Tags\HasTags;

class Article extends Model
{    use SoftDeletes;
    use HasTags; 
     protected $casts = [
    'created_at' => 'datetime',
];
protected $fillable = ["title",'description',"art-category","post-image"];
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable')->where("status",1);
    }


    public function category()
    {
        return $this->morphToMany(Category::class,'article_category');
    }
    public function subCategory()
    {
        return $this->morphToMany(subCategory::class,'article_sub_category');
    }
    public function getRouteKeyName()
    {
        return "slug";   
    }
    function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = IlluminateStr::slug($value);
    }
    public function banner($data)
    {
        return $data->shuffle()->take(1);
    }
    public function getallCategoryAttribute()
    {   $data= $this->category;
        foreach ($data as $category) {
           return $category;
        }
    }
    public static function scopeSidebar1($data)
    {
        return $data->where('view_count', '>', 15)
        ->where("status",2)
        ->orderBy('created_at','DESC')->take(7)->get();
    }
    public static function scopeFeatured($data)
    {
        return $data->where('featured', 1)
        ->where("status",2)
        ->orderBy('created_at','DESC')->take(15)->get();
    }

      public function getUrlAttribute()
    {
       return route('article.show', $this->slug);
    }

  
    public  function scopeSort2()
    {
       //$data=  $this->category()->pluck('slug')->take(2);
       //return $data->orderBy('created_at','DESC')->get();
        //  Category::where('slug', 'pakistan')->where(function ($slug){
        //     return   $slug->where('slug', 'cape-verde')->get();
        // });
    }

}
