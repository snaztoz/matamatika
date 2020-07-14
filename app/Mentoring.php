<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentoring extends Model
{
	/**
	 * Secara default kegiatan mentoring belum 
	 * selesai.
	 *
	 * @var array
	 */
    protected $attributes = [
    	'is_done' => false
    ];

    /**
     * Mengambil semua user yang terdaftar dalam
     * kegiatan mentoring terkait.
     */
    public function users()
    {
    	return $this->belongsToMany('App\User');
    }
}
