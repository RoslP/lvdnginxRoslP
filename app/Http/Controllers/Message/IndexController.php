<?php

namespace App\Http\Controllers\Message;

use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public function __invoke()
    {
        return inertia('Messages/MessagesIndex');
    }
}
