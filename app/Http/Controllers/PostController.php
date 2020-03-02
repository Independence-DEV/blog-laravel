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

    public function post($id)
    {
        $post = Post::find($id);

        return view('post', ["post" => $post]);
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(Request $request)
    {
        Post::create($request->all());
        return redirect('admin');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::pluck('name', 'id');
        return view('admin.post.edit', compact('post', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect('admin');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('admin');
    }
}
