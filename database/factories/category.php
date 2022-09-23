<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Category;
use Illuminate\Support\Str;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name'=> $r=  "World",
        'slug'=> Str::slug($r),
        'description'=> $r=  "news around the World",
        'status'=> $faker->numberBetween(0,1),
    ];
});
