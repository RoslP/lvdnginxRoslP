<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController1 extends Controller
{
    public function __invoke()
    {
        return view('index');
    }
}
