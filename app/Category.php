<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{

    protected $fillable = ["name",'description',"status"];
    public function article_category()
    {
        return $this->morphedByMany(Article::class,'article_category')
        ->where("status", 1)
        ->orderBy('created_at','DESC');
    }

    public function subCategory()
    {
        return $this->hasMany(subCategory::class, 'parents_category');
    }

    function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] =  Str::slug($value);
    }

    public function getUrlAttribute()
    {
       return route('categories', $this->slug);
    }

        function getRouteKeyName()
        {
            return "slug";
        }
    
}
