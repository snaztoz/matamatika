<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilePicture extends Model
{
    /**
     * Relasi One-to-One terhadap model dari User
     */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
