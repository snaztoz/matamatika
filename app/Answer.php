<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * Mengambil user yang membuat jawaban terkait
     */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    /**
     * Mengambil pertanyaan dari jawaban terkait
     */
    public function question()
    {
    	return $this->belongsTo('App\Question');
    }

    /**
     * Balasan untuk jawaban terkait
     */
    public function replies()
    {
        return $this->hasMany('App\Reply');
    }
}
