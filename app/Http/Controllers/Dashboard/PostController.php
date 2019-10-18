<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = auth()->user()->posts;

        return view('dashboard.posts.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        $tags = auth()->user()->tags;

        return view('dashboard.posts.create', [
            'tags' => $tags
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
        ]);

        $post = Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->get('content'),
            'user_id' => auth()->user()->id,
        ]);

        $post->tags()->attach($request->tags);
    }

    public function edit(Post $post)
    {
        $tags = auth()->user()->tags;

        return view('dashboard.posts.edit', [
            'post' => $post,
            'tags' => $tags,
            'selected_tags' => $post->tags->pluck('id'),
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
        ]);

        $post->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->get('content'),
        ]);

        $post->tags()->sync($request->tags);
    }
}
