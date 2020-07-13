<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProfilePicture extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'profile_picture_link',
    ];

    /**
     * Relasi One-to-One terhadap model dari User
     */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
