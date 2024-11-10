<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
         return [dd(Post::find(1)),[dd((new Post()))]];
    }
}
