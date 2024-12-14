<?php

namespace App\Http\Controllers\User;

use App\Events\DynamicSendEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(User $user, StoreRequest $request)
    {
        $data =$request->validated();
        broadcast(new DynamicSendEvent($user->id,"this is uid ${data['from_id']}"))->toOthers();
        return response()->json($data);
    }
}
