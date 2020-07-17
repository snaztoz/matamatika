<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MentoringMail extends Model
{
	/**
	 * The attributes that are mass assignable
	 */
	protected $fillable = ['content'];

	/**
	 * Mengambil model dari mentoringnya.
	 */
    public function mentoring()
    {
    	return $this->belongsTo('App\Mentoring');
    }
}
