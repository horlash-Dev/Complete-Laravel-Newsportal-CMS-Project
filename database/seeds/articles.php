<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Article;
use App\Comment;
use App\Reply;

class articles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)->create()->each(function ($user)
        {
            $user->articles()->saveMany(factory(Article::class, 2)->make())->each(function($post)
            {
                $post->comments()->saveMany(factory(Comment::class, 2)->make())
                ->each(function ($comment)
            {
                $comment->reply()->saveMany(factory(Reply::class, 2)->make());  
            });
            });
        });

    }
}
