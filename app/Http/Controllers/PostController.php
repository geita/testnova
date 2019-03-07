<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderByDesc('published_at')->get();

        return view('post.posts', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('post.post', compact('post'));
    }
}
