<?php

namespace App\Events;

use App\Mentoring;
use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewUserRegisterMentoring
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Kegiatan mentoring yang didaftarkan oleh suatu user
     */
    public $mentoring;

    /**
     * User yang mendaftar ke kegiatan terkait
     */
    public $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Mentoring $mentoring, User $user)
    {
        $this->mentoring = $mentoring;
        $this->user = $user;
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
