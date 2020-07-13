<?php

namespace App\Listeners;

use App\ProfilePicture;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Storage;

class CreateUserProfilePictureModel
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $profile_picture_link = Storage::url('images/default_user.png');

        // Membuat model profile picture kepada tiap user
        // yang baru melakukan registrasi.
        $event->user->profile_picture()->create([
            'profile_picture_link' => $profile_picture_link
        ]);
    }
}
