<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return response()->json(Post::with('user')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required',
            'content' => 'required'
        ]);

        $post = Post::create($request->all());
        return response()->json($post, 201);
    }
    public function showPosts()
    {
        $posts = Post::with('user')->get();
        return view('posts.index', compact('posts'));
    }

}

