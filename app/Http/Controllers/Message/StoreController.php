<?php

namespace App\Http\Controllers\Message;

use App\Events\StoreMessageEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\Message\StoreRequest;
use App\Http\Resources\Message\MessageCreateResource;
use App\Models\Massage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $message=Massage::firstOrCreate($request->validated());
        broadcast(new StoreMessageEvent($message))->toOthers();
       return MessageCreateResource::make($message)->resolve();
    }
}
