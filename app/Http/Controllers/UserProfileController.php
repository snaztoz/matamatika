<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Menampilkan page user profile
	 */
    public function user_profile()
    {
    	return view('user.profile');
    }
}
