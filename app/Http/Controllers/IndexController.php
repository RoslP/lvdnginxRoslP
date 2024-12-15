<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class IndexController extends BaseController
{
   public function __invoke()
   {
      return view('main.index');
   }
}
