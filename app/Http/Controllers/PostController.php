<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
      return view('posts', compact('posts'));
    }

    public function create()
    {
        return view('posts.create-edit');
    }

    public function store(PostRequest $request, Post $post)
    {
        Post::create($request->all());
        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view ('posts.mostrar', compact('post'));
    }

    public function edit(Post $post)
    {
        return view ('posts.create-edit', compact('post'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->all());
        return redirect()-> route('posts.index');

    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
