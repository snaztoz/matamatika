<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	/**
	 * Relasi inversed One-to-Many dengan User.
	 */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    /**
     * Relasi One-to-Many dengan Answer.
     */
    public function answers()
    {
    	return $this->hasMany('App\Answer');
    }
}
