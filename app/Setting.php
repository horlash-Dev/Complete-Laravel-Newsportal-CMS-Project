<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
protected $fillable = ["name","type","value","image"];
public $timestamps = false;
public $incrementing = false;
protected $primaryKey = "name";
protected $KeyType = "string";

// function getRouteKeyName()
// {
//     return "name";
// }

public static function scopeMenu($data)
{
    return $data->where("type","site_menu")->orderBy("name","ASC");
}
public static function scopeLogo($data)
{
    return $data->where("name","site_logo");
}
public static function scopeFavicon($data)
{
    return $data->where("name","site_favicon");
}
public static function scopeTitle($data)
{
    return $data->where("name","site_title");
}
public static function scopeTag($data)
{
    return $data->where("name","description");
}
public static function category($data)
{
    return Category::where("name",$data)->firstorfail();
}


}
