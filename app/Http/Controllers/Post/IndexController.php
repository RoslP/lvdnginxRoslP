<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return inertia('Post/Index');
    }
}
