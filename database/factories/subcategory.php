<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\subCategory;
use App\Category;

$factory->define(subCategory::class, function (Faker $faker) {
    return [
        'name'=> $r= $faker->country,
        'slug'=> Str::slug($r),
        'status'=> $faker->numberBetween(0,1),
        'parents_category'=> Category::pluck('id')->random(),
    ];
});
