<?php

namespace App\Events;

use App\Mentoring;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewMentoringMail
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Kegiatan mentoring yang memiliki email baru untuk
     * dikirim.
     */
    public $mentoring;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Mentoring $mentoring)
    {
        $this->mentoring = $mentoring;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
