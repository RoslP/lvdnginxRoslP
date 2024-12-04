<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AxiosController extends Controller
{
    public function __invoke()
    {
        return [
            [
                'data' => 'secresadt data',
                'data 2' => 'secret data 2',
                'data 3' => 'secrsadet data 3',
            ],
            [
                'data 1' => 'secreasdt data',
                'data 2' => 'secssadadret data 2',
                'data 3' => 'secrsadasdet ddsaata 3',
            ],
            [
                'data 1' => 'ssdsdsecret data',
                'data 2' => 'secret asddata 2',
                'data 3' => 'secrasdet data 3',
            ]
        ];
    }
}
