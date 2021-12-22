<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        $data = ['posts' => $posts];
        return view('posts.index', $data);
    }

    public function show($id)
    {
        $post = Post::find($id);
        $data = ['post' => $post];
        return view('posts.show', $data);
    }

    public function store(PostRequest $request)
    {
        //
    }

    public function update(PostRequest $request)
    {
        //
    }
}
