<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function store()
    {

    }
    public function index()
    {
        $posts = Cache::rememberForever('posts:all', function () {
            return Post::all();
        });
        dd($posts->pluck('title')->toArray());
    }

}
