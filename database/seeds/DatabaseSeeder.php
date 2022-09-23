<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Article;
use App\Category;
use App\Setting;
use App\subCategory;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        //generate app default settings....make sure you update your menu before deleteing categories else it will affect.
        $settings = [
            [
                "name" => "site_title",
                "type"=> "site_descrition",
                "value" => "360Zone"
            ],
            [
                "name" => "description",
                "type"=> "site_descrition",
                "value" => "online news portal"
            ],
            [
                "name" => "site_favicon",
                "type"=> "site_descrition",
                "image" => "fav.png"
            ],
            [
                "name" => "site_logo",
                "type"=> "site_descrition",
                "image" => "logo.png"
            ],
            [
                "name" => "featured_section",
                "total_post"=> "6",
                "type"=> "site_hompage",
                "value"=> "Featured",
            ],
            [
                "name" => "category_news_section",
                "total_post"=> "6",
                "type"=> "site_hompage"
            ],
            [
                "name" => "trending_section",
                "total_post"=> "6",
                "total_views"=> "10",
                "type"=> "site_homepage",
                "value"=> "Latest News",
            ],
            [
                "name" => "sidebar_section",
                "total_post"=> "6",
                "total_views"=> "10",
                "type"=> "site_sidebar"
            ],
            [
                "name" => "menu_field_1",
                "value"=> "world",
                "type"=> "site_menu"
            ],
            [
                "name" => "menu_field_2",
                "value"=> "uncategorized",
                "type"=> "site_menu"
            ],
            [
                "name" => "menu_field_3",
                "value"=> "uncategorized",
                "type"=> "site_menu"
            ],
            [
                "name" => "menu_field_4",
                "value"=> "uncategorized",
                "type"=> "site_menu"
            ],
            [
                "name" => "menu_field_5",
                "value"=> "world",
                "type"=> "site_menu"
            ],
            [
                "name" => "menu_field_6",
                "value"=> "world",
                "type"=> "site_menu"
            ],
            [
                "name" => "category_field_1",
                "value"=> "world",
                "type"=> "site_category"
            ],
            [
                "name" => "category_field_2",
                "value"=> "uncategorized",
                "type"=> "site_category"
            ],
            [
                "name" => "category_field_3",
                "value"=> "uncategorized",
                "type"=> "site_category" 
            ],
            [
            "name" => "category_field_4",
            "value"=> "world",
            "type"=> "site_category"
        ],
    
        ];
        foreach ($settings as $key) {
            Setting::create($key);
        }

        // generate app roles and prmmissions
        
        $new_role = [
            [
                "name" => "Moderator",
                "description"=> "user will be a moderator and will have access to some modules...",
            ],
            [
                "name" => "Author",
                "description"=> "user will be a author and will have access to few modules and its the defaults role for new users",
            ],

        ];
        
        $new_permission = [
            [
                "name" => "Permission List",
                "description"=> "vew all permissions",
            ],
            [
                "name" => "Permission Add",
                "description"=> "add new permissions",
            ],
            [
                "name" => "Permission Update",
                "description"=> "modify permissions",
            ],
            [
                "name" => "Permission Delete",
                "description"=> "delete permissions",
            ],
            [
                "name" => "Role Add",
                "description"=> "add new role",
            ],
            [
                "name" => "Role Update",
                "description"=> "update roles",
            ],
            [
                "name" => "Role List",
                "description"=> "view all roles",
            ],
            [
                "name" => "Role Delete",
                "description"=> "delete roles",
            ],
            [
                "name" => "Post Add",
                "description"=> "Add new post and access gallery",
            ],
            [
                "name" => "Post List",
                "description"=> "view all post",
            ],
            [
                "name" => "Post Update",
                "description"=> "modify post",
            ],
            [
                "name" => "Post Delete",
                "description"=> "trash post",
            ],
            [
                "name" => "Category List",
                "description"=> "all categories",
            ],
            [
                "name" => "Category Add",
                "description"=> "add new categories",
            ],
            [
                "name" => "Category Update",
                "description"=> "modify categories",
            ],
            [
                "name" => "Category Delete",
                "description"=> "trash categories",
            ],
            [
                "name" => "Comment View",
                "description"=> "view comments and replies",
            ],
            [
                "name" => "Comment Approval",
                "description"=> "approve comments and replies",
            ],
            [
                "name" => "Comment Reply",
                "description"=> "reply users comments",
            ],
            [
                "name" => "Comment Delete",
                "description"=> "trash comments",
            ],
        ];
        //permissions
        foreach ($new_permission as $key) {
            Permission::create($key);
        }
        //roles
        foreach ($new_role as $key) {
            Role::create($key);
        }
         // create app admin with authorizations
        $user = factory(User::class)->create();
        $permission= factory(Permission::class)->create();
        $role= factory(Role::class)->create();
        $role->givePermissionTo($permission->name);
        $user->assignRole($role);

        //generate post, default category and subcategory and its very important dont delete it will affect the system ...
        $cat= factory(Category::class)->create();
        $uncat= Category::create(['name'=>'uncategorized','slug'=>'uncategorized','description'=>'uncategorized Articles',"status"=> 0]);
        $unsubcat= subCategory::create(['name'=>'rome','slug'=>'rome','description'=>'rome',"status"=> 0]);
        $user->articles()->saveMany(factory(Article::class, 2)->make())->each(function($post){
            $cat_id = Category::where('id',1)->first();
            $post->category()->attach($cat_id);
        });
        
    }
}
