<?php

namespace App\Http\Controllers\Message;

use App\Http\Controllers\Controller;
use App\Http\Requests\Message\StoreRequest;
use App\Http\Resources\Message\MessageCreateResource;
use App\Models\Massage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
       return MessageCreateResource::make(Massage::firstOrCreate($request->validated()))->resolve();
    }
}
