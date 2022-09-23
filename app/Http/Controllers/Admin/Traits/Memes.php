<?php
namespace App\Http\Controllers\Admin\Traits;
/**
 * 
 */
trait Memes
{
    public static function checkStatus($post)
    {
        if ($post->status == 1) {
            $post->status = 0;
        }else{
            $post->status = 1;
        }
        $post->save();
    }

    public static function hot_news($post)
    {
        if ($post->featured == 1) {
            $post->featured = 0;
        }else{
            $post->featured = 1;
        }
        $post->save();
    }
}
