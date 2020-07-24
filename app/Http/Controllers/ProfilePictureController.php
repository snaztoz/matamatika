<?php

namespace App\Http\Controllers;

use App\ProfilePicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilePictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProfilePicture  $profilePicture
     * @return \Illuminate\Http\Response
     */
    public function show(ProfilePicture $profilePicture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProfilePicture  $profilePicture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProfilePicture $profilePicture)
    {
        $validated = $request->validate([
            'pict' => 'required|image'
        ]);

        $link = $validated['pict']->store('public/images');
        $link = str_replace('public/', '/storage/', $link);

        $profilePicture->profile_picture_link = $link;
        $profilePicture->save();

        return redirect()->route('profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProfilePicture  $profilePicture
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfilePicture $profilePicture)
    {
        //
    }
}
