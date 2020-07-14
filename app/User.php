<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relasi One-to-One terhadap model dari ProfilePicture.
     */
    public function profile_picture()
    {
        return $this->hasOne('App\ProfilePicture');
    }

    /**
     * Relasi One-to-Many dengan model Question.
     */
    public function questions()
    {
        return $this->hasMany('App\Question');
    }

    /**
     * Relasi One-to-Many dengan model Answer.
     */
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }

    /**
     * Relasi One-to-Many dengan model Reply
     */
    public function replies()
    {
        return $this->hasMany('App\Reply');
    }

    /**
     * Mengambil kegiatan mentoring yang diikuti oleh
     * user terkait
     */
    public function mentorings()
    {
        return $this->belongsToMany('App\Mentoring');
    }
}
