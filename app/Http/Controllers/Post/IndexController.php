<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = PostResource::collection(Post::all());
        return inertia('Post/Index', ['posts' => $posts]);
    }
}
