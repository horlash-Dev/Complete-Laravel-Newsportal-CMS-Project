<?php

namespace App\Http\Controllers\Repository;
use App\User;
/**
 * 
 */
trait Userdetails
{
    public static function  details()
    {
       return User::with(["articles"])->get();
    }
}
