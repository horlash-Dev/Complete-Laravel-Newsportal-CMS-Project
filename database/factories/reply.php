<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Reply;
use App\Model;
use Faker\Generator as Faker;
use App\User;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'body'=> $faker->sentence,
        'created_by'=> User::pluck('id')->random(),
    ];
});
