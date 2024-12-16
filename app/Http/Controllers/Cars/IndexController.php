<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        return  Car::all()->toJson();
    }
}
