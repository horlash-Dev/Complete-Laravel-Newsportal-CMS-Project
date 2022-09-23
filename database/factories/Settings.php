<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Setting;
use Faker\Generator as Faker;

// $factory->define(Setting::class, function (Faker $faker) {
//     return [
//         "name" => "site_title",
//         "type"=> "site_descrition",
//         "value" => "360Zone"
//     ];
// });

// $factory->define(Setting::class, function (Faker $faker) {
//     return [
//         "name" => "description",
//         "type"=> "site_descrition",
//         "value" => "online news portal"
//     ];
// });

// $factory->define(Setting::class, function (Faker $faker) {
//     return [
//         "name" => "site_favicon",
//         "type"=> "site_descrition",
//         "image" => "fav.png"
//     ];
// });

// $factory->define(Setting::class, function (Faker $faker) {
//     return [
//         "name" => "site_logo",
//         "type"=> "site_descrition",
//         "image" => "logo.png"
//     ];
// });

// $factory->define(Setting::class, function (Faker $faker) {
//     return [
//         "name" => "menu_field_1",
//         "value"=> "category 1",
//         "type"=> "site_menu"
//     ];
// });

// $factory->define(Setting::class, function (Faker $faker) {
//     return [
//         "name" => "menu_field_2",
//         "value"=> "category 2",
//         "type"=> "site_menu"
//     ];
// });

// $factory->define(Setting::class, function (Faker $faker) {
//     return [
//         "name" => "menu_field_3",
//         "value"=> "category 3",
//         "type"=> "site_menu"
//     ];
// });

// $factory->define(Setting::class, function (Faker $faker) {
//     return [
//         "name" => "menu_field_4",
//         "value"=> "category 4",
//         "type"=> "site_menu"
//     ];
// });

// $factory->define(Setting::class, function (Faker $faker) {
//     return [
//         "name" => "menu_field_5",
//         "value"=> "category 5",
//         "type"=> "site_menu"
//     ];
// });

// $factory->define(Setting::class, function (Faker $faker) {
//     return [
//         "name" => "menu_field_6",
//         "value"=> "category 6",
//         "type"=> "site_menu"
//     ];
// });

// $factory->define(Setting::class, function (Faker $faker) {
//     return [
//         "name" => "featured_section",
//         "total_post"=> "6"
//     ];
// });


// $factory->define(Setting::class, function (Faker $faker) {
//     return [
//         "name" => "category_news_section",
//         "total_post"=> "6"
//     ];
// });

// $factory->define(Setting::class, function (Faker $faker) {
//     return [
//         "name" => "trending_section",
//         "total_post"=> "6",
//         "total_views"=> "10"
//     ];
// });

// $factory->define(Setting::class, function (Faker $faker) {
//     return [
//         "name" => "sidebar_section",
//         "total_post"=> "6",
//         "total_views"=> "10"
//     ];
// });

// $factory->define(Setting::class, function (Faker $faker) {
//     return [
//         "name" => "category_field_1",
//         "value"=> "category 1",
//         "type"=> "site_category"
//     ];
// });
// $factory->define(Setting::class, function (Faker $faker) {
//     return [
//         "name" => "category_field_2",
//         "value"=> "category 2",
//         "type"=> "site_category"
//     ];
// });
// $factory->define(Setting::class, function (Faker $faker) {
//     return [
//         "name" => "category_field_3",
//         "value"=> "category 3",
//         "type"=> "site_category"
//     ];
// });
// [
//     "name" => "site_title",
//     "type"=> "site_descrition",
//     "value" => "360Zone"
// ],
// [
//     "name" => "description",
//     "type"=> "site_descrition",
//     "value" => "online news portal"
// ],
// [
//     "name" => "site_favicon",
//     "type"=> "site_descrition",
//     "image" => "fav.png"
// ],
// [
//     "name" => "site_logo",
//     "type"=> "site_descrition",
//     "image" => "logo.png"
// ],
// [
//     "name" => "featured_section",
//     "total_post"=> "6",
//     "type"=> "site_hompage",
//     "value"=> "Featured",
// ],
// [
//     "name" => "category_news_section",
//     "total_post"=> "6",
//     "type"=> "site_hompage"
// ],
// [
//     "name" => "trending_section",
//     "total_post"=> "6",
//     "total_views"=> "10",
//     "type"=> "site_homepage",
//     "value"=> "Latest News",
// ],
// [
//     "name" => "sidebar_section",
//     "total_post"=> "6",
//     "total_views"=> "10",
//     "type"=> "site_sidebar"
// ],
// [
//     "name" => "menu_field_1",
//     "value"=> "world",
//     "type"=> "site_menu"
// ],
// [
//     "name" => "menu_field_2",
//     "value"=> "world",
//     "type"=> "site_menu"
// ],
// [
//     "name" => "menu_field_3",
//     "value"=> "world",
//     "type"=> "site_menu"
// ],
// [
//     "name" => "menu_field_4",
//     "value"=> "world",
//     "type"=> "site_menu"
// ],
// [
//     "name" => "menu_field_5",
//     "value"=> "world",
//     "type"=> "site_menu"
// ],
// [
//     "name" => "menu_field_6",
//     "value"=> "world",
//     "type"=> "site_menu"
// ],
// [
//     "name" => "category_field_1",
//     "value"=> "world",
//     "type"=> "site_category"
// ],
// [
//     "name" => "category_field_2",
//     "value"=> "world",
//     "type"=> "site_category"
// ],
// [
//     "name" => "category_field_3",
//     "value"=> "world",
//     "type"=> "site_category" 
// ],
// [
// "name" => "category_field_4",
// "value"=> "world",
// "type"=> "site_category"
// ],

// // ];
// $factory->define(Setting::class, function (Faker $faker) {
//     return [
//         [
//             "name" => "site_title",
//             "type"=> "site_descrition",
//             "value" => "360Zone"
//         ],
//         [
//             "name" => "description",
//             "type"=> "site_descrition",
//             "value" => "online news portal"
//         ],
//         [
//             "name" => "site_favicon",
//             "type"=> "site_descrition",
//             "image" => "fav.png"
//         ],
//         [
//             "name" => "site_logo",
//             "type"=> "site_descrition",
//             "image" => "logo.png"
//         ],
//         [
//             "name" => "featured_section",
//             "total_post"=> "6"
//         ],
//         [
//             "name" => "category_news_section",
//             "total_post"=> "6"
//         ],
//         [
//             "name" => "trending_section",
//             "total_post"=> "6",
//             "total_views"=> "10"
//         ],
//         [
//             "name" => "sidebar_section",
//             "total_post"=> "6",
//             "total_views"=> "10"
//         ],
//         [
//             "name" => "menu_field_1",
//             "value"=> "category 1",
//             "type"=> "site_menu"
//         ],
//         [
//             "name" => "menu_field_2",
//             "value"=> "category 2",
//             "type"=> "site_menu"
//         ],
//         [
//             "name" => "menu_field_3",
//             "value"=> "category 3",
//             "type"=> "site_menu"
//         ],
//         [
//             "name" => "menu_field_4",
//             "value"=> "category 4",
//             "type"=> "site_menu"
//         ],
//         [
//             "name" => "menu_field_5",
//             "value"=> "category 5",
//             "type"=> "site_menu"
//         ],
//         [
//             "name" => "menu_field_6",
//             "value"=> "category 6",
//             "type"=> "site_menu"
//         ],
//         [
//             "name" => "category_field_1",
//             "value"=> "category 1",
//             "type"=> "site_category"
//         ],
//         [
//             "name" => "category_field_2",
//             "value"=> "category 2",
//             "type"=> "site_category"
//         ],
//         [
//             "name" => "category_field_3",
//             "value"=> "category 3",
//             "type"=> "site_category" 
//         ],
//         [
//         "name" => "category_field_4",
//         "value"=> "category 4",
//         "type"=> "site_category"
//     ],

//     ];
// });
