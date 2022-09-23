<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Article;
use App\subCategory;
use Spatie\Tags\Tag;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $test= factory(Category::class,3)->create();
        // $cate= Category::pluck("id");
        // $posts= Article::where('featured', 0)->get();
        // foreach ($posts as $post) {
        //     $post->category()->attach($cate);
        // }

        // $test= factory(subCategory::class, 3)->create();
        // $posts= Article::where('featured', 1)->get();
        // foreach ($posts as $post) {
        //     $post->subCategory()->attach($test);
        // }

        // $test= factory(Tag::class,3)->create();
        // $posts= Article::where('featured', 0)->get();
        // foreach ($posts as $post) {
        //     $post->attachTags($posts);
        // }
    }
}
