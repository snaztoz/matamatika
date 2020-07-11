<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
	/**
	 * Penulis dari balasan.
	 */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    /**
     * Jawaban yang diberi balasan terkait.
     */
    public function answer()
    {
    	return $this->belongsTo('App\Answer');
    }
}
