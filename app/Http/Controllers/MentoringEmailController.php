<?php

namespace App\Http\Controllers;

use App\Mentoring;
use App\Events\NewMentoringMail;
use App\Mail\MentoringUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class MentoringEmailController extends Controller
{
	/**
	 * Menyimpan isi dari email yang ditulis.
	 * 
     * Method ini akan melemparkan sebuah event yang
     * menandai bahwa email baru telah dibuat.
	 */
    public function store(Request $request, Mentoring $mentoring)
    {
        if (Gate::denies('access-mentoring-backend')) {
            return redirect()->route('mentoring.index');
        }

        $request->validate(['mail' => 'required']);
        
        $mentoring->mails()->create([
            "content" => $request->input('mail')
        ]);

        // Kirimkan event
        event(new NewMentoringMail($mentoring));

        return redirect()->route('mentoring.index');
    }
}
