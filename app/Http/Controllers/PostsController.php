<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts',compact('posts'));

    }
    public function create()
    {
        $postsArr = [
            [
                'title'=>'laravel orm create method',
                'content'=>'some content',
                'likes'=>'23',
                'is_published'=>1,
            ],
            [
                'title'=>'another laravel orm create method',
                'content'=>'another some content',
                'likes'=>'25',
                'is_published'=>0,
            ]
        ];
        foreach ($postsArr as $post) {
            Post::create($post);
        }
    }
    public function update()
    {
        Post::find(4)->update(['title'=>'laravel update method']);
    }
    public function delete()
    {
        Post::find(1)->delete();
    }
    public function firstOrCreate()
    {
        Post::firstOrCreate(['title'=>'some post'],['title'=>'laravel firstOrCreate method','content'=>'some content']);
    }
}
