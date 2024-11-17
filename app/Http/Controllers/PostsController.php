<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostsTag;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
//        $post = Post::find(1);
//        $categories = Category::find(1);
//        dump($categories->posts);
//        $tag= Tag::find(2);
//        dump($tag->posts);
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', compact(['categories', 'tags']));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required | string',
            'post_content' => 'required | string',
            'image' => 'string',
            'category_id' => 'int',
            'tags' => ''
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $post = Post::create($data);
        $post->tags()->attach($tags);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.edit', compact(['post', 'categories','tags']));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'required | string',
            'post_content' => 'required | string',
            'image' => 'string',
            'category_id' => '',
            'tags' => ''
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $post->update($data);
        $post->tags()->sync($tags);
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function firstOrCreate()
    {
        Post::firstOrCreate(['title' => 'some post'], ['title' => 'laravel firstOrCreate method', 'content' => 'some content']);
    }

    public function restore()
    {
        Post::withTrashed()->find(1)->restore();
        dump('restored');
    }
}
