<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function posts($categ_id = null)
    {
        if(is_null($categ_id)) $posts =  Post::all();
        else $posts = Category::find($categ_id)->posts;

        return view('posts', ["posts" => $posts]);
    }

    public function post($post_id)
    {
        $post = Post::find($post_id);

        return view('post', ["post" => $post]);
    }
}
