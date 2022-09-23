<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use App\User;
use App\Model;
use Faker\Generator as Faker;
use App\Comment;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'body'=> $faker->text,
        'username'=> $faker->userName,
        'created_by'=> User::pluck('id')->random(),
    ];
});
