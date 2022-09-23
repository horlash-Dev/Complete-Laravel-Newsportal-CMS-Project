<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class subCategory extends Model

{  
    protected $fillable = ["name",'description',"status"];
    public function article_subCategory()
    {
        return $this->morphedByMany(Article::class,'article_sub_category')->where("status", 1);
    }

    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parents_category');
    }
    public function getUrlAttribute()
    {
       return route('subcategories', $this->slug);
    }
    function getRouteKeyName()
    {
        return "slug";
    }

    function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] =  Str::slug($value);
    }
    
}
