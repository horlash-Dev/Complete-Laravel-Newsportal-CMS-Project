<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Article;

$factory->define(Article::class, function (Faker $faker) {
    return [
       'title'=> $r= $faker->sentence,
        'description'=> $faker->text(500),
        'slug'=> \Str::slug($r),
        'main_img'=> "no-post.jpg",
        'mini_img'=> "no-post.jpg",
        'thumb_img'=> "no-post.jpg",
        'banner_img'=> "no-post.jpg",
        'featured' => $faker->numberBetween(0,1),
        'view_count' => $faker->numberBetween(0,20),
    ];
});
