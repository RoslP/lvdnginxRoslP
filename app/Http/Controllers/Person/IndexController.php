<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Models\Person;

class IndexController extends Controller
{
    public function __invoke(): array
    {
        return Person::get()->all();
    }
}
