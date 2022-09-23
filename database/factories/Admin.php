<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'type' => 1,
        'fullname' => 'admin',
        'username' => "admin",
        'email' => 'admin@admin.com',
        'password'=> '$2y$10$pG3YeI3Ebb.cNlk.AYYkSuoymX61iE1L3lZxCWpF1W7wjsPbN3uBC'

    ];
});
