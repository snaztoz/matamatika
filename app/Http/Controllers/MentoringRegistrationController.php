<?php

namespace App\Http\Controllers;

use App\Mentoring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MentoringRegistrationController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    /**
     * Mendaftarkan user ke sebuah kegiatan mentoring.
     */
    public function register(Mentoring $mentoring)
    {
    	$mentoring->users()->attach(Auth::id());
    	return redirect()->route('mentoring.index');
    }

    /**
     * Membatalkan registrasi user di sebuah kegiatan mentoring.
     */
    public function unregister(Mentoring $mentoring)
    {
    	$mentoring->users()->detach(Auth::id());
    	return redirect()->route('mentoring.index');
    }
}
