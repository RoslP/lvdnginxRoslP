<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
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
        return view('post.index',compact('posts'));
    }
    public function create()
    {
       $categories = Category::all();
       $tags = Tag::all();
       return view('post.create',compact(['categories','tags']));
    }
    public function store()
    {
        $data = request()->validate([
            'title'=>'string',
            'post_content'=>'string',
            'image'=>'string',
            'category_id'=>'int'
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }
    public function show(Post $post)
    {
        return view('post.show',compact('post'));
    }
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('post.edit',compact(['post','categories']));
    }
    public function update(Post $post)
    {
       $data = request()->validate([
           'title'=>'string',
           'post_content'=>'string',
           'image'=>'string',
           'category_id'=>''
       ]);
       $post->update($data);
       return redirect()->route('post.show',$post->id);
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
    public function firstOrCreate()
    {
        Post::firstOrCreate(['title'=>'some post'],['title'=>'laravel firstOrCreate method','content'=>'some content']);
    }
    public function restore()
    {
        Post::withTrashed()->find(1)->restore();
        dump('restored');
    }
}
