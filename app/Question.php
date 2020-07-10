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
    	$this->belongsTo('App\User');
    }

    /**
     * Relasi One-to-Many dengan Answer.
     */
    public function answers()
    {
    	$this->hasMany('App\Answer');
    }
}
