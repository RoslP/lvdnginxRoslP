<?php

namespace App\Events;

use App\Http\Resources\Message\MessageCreateResource;
use App\Models\Massage;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class StoreMessageEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    private Massage $massage;

    /**
     * Create a new event instance.
     */
    public function __construct($message)
    {
        $this->$message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('store_message'),
        ];
    }

    /**
     * The model event's broadcast name.
     */
    public function broadcastAs(): string
    {
        return 'store_message';
    }
    public function broadcastWith(): array
    {
        return ['message' => MessageCreateResource::make($this->massage)->resolve()];
    }

}
