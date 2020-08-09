<?php

namespace App\Http\Controllers;

use App\Mentoring;
use App\Events\NewUserRegisterMentoring;
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
    public function register(Mentoring $mentoring, Request $request)
    {
    	$mentoring->users()->attach(Auth::id());
        event(new NewUserRegisterMentoring($mentoring, Auth::user()));
        $request->session()->flash('registered',
                'Pendaftaran berhasil! Pantau terus emailmu untuk info lebih lanjut!');

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
