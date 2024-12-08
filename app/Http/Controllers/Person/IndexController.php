<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Resources\Person\PersonResource;
use App\Http\Resources\Post\PostResource;
use App\Models\Person;

class IndexController extends Controller
{
    public function __invoke(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return PersonResource::collection(Person::all() );
    }
}
