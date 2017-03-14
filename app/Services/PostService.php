<?php
/**
 * Created by PhpStorm.
 * User: joaopaulosr
 * Date: 3/13/17
 * Time: 8:03 AM
 */

namespace App\Services;

use App\Post;

class PostService
{
    public function getPosts() {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return $posts;
    }
}