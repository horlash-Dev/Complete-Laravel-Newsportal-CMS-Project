<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

$factory->define(Permission::class, function (Faker $faker) {
    return [
        "name"=> "master admin",
        "description"=>"master of all permissions and it is granted to admin only..."
    ];
});

$factory->define(Role::class, function (Faker $faker) {
    return [
        "name"=> "Administrator",
        "description"=>"admin role to access everything on site..."
    ];
});
