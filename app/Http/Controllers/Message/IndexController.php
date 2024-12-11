<?php

namespace App\Http\Controllers\Message;

use App\Http\Controllers\Controller;
use App\Http\Resources\Message\MessageCreateResource;
use App\Models\Massage;


class IndexController extends Controller
{
    public function __invoke()
    {
        return inertia('Messages/MessagesIndex',['messages'=>MessageCreateResource::collection(Massage::orderBy('created_at','desc')->get())->resolve()]);
    }
}
