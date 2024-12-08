<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Resources\Person\PersonResource;
use App\Models\Person;

class ShowController extends Controller
{
    public function __invoke(Person $person): PersonResource
    {
        return new PersonResource($person);
    }
}
