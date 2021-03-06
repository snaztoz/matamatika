<?php

namespace App\Http\Controllers;

use App\Mentoring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class MentoringController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mentorings = Mentoring::where('is_done', false)->get();
        return view('mentoring.index', ['mentorings' => $mentorings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::denies('access-mentoring-backend')) {
            return redirect()->route('mentoring.index');
        }

        return view('mentoring.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Gate::denies('access-mentoring-backend')) {
            return redirect()->route('mentoring.index');
        }

        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|max:255'
        ]);

        $mentoring = new Mentoring;
        $mentoring->title = $request->input('title');
        $mentoring->description = $request->input('content');
        $mentoring->save();

        return redirect()->route('mentoring.show', ['mentoring' => $mentoring]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mentoring  $mentoring
     * @return \Illuminate\Http\Response
     */
    public function show(Mentoring $mentoring)
    {
        if (Gate::denies('access-mentoring-backend')) {
            return redirect()->route('mentoring.index');
        }
        
        if ($mentoring->mails->count() != 0) {
            $latest_mail = $mentoring->mails()->latest()->first();
        } else {
            $latest_mail = '';
        }

        return view('mentoring.show', [
            'mentoring' => $mentoring,
            'latest_mail' => $latest_mail
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mentoring  $mentoring
     * @return \Illuminate\Http\Response
     */
    public function edit(Mentoring $mentoring)
    {
        // Sepertinya route 'edit' ini tidak diperlukan?
        return redirect()->route('mentoring.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mentoring  $mentoring
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mentoring $mentoring)
    {
        // Sepertinya route 'update' ini tidak diperlukan?
        return redirect()->route('mentoring.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mentoring  $mentoring
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mentoring $mentoring)
    {
        if (Gate::denies('access-mentoring-backend')) {
            return redirect()->route('mentoring.index');
        }

        // Kegiatan mentoring dihapus dengan cara ditandai
        // sebagai 'sudah selesai'.
        $mentoring->is_done = true;
        $mentoring->save();

        return redirect()->route('mentoring.index');
    }
}
