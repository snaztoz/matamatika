<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Question $forum, Request $request)
    {
        $request->validate([
            'content' => 'required'
        ]);

        // Source MUNGKIN masih memiliki gambar dalam 
        // format Base64 encoding.
        // Ubah URL gambar yang ada menjadi URL ke 
        // penyimpanan di server. 
        $preprocessed_html = preg_replace_callback(
            '/<img src="data:image\/(?<source>[^"]+)">/', 
            function($matches) {
                list($type, $data) = explode(';', $matches['source']);
                
                // ekstrak tipe filenya.
                $type = strtolower('.' . $type);

                // Mendecode file terlebih dahulu.
                list(, $data) = explode(',', $data);
                $image = base64_decode($data);

                // Dibutuhkan nama random untuk file yang akan 
                // disimpan. Tapi perlu diperhatikan bahwa filename
                // yang dihasilkan MASIH MUNGKIN memiliki nama
                // yang sama (bisa dilakukan loop untuk mencari nama
                // file yang benar-benar unik).
                // format:
                //      images/[NAMA_RANDOM].[ekstensi_file]
                $filename = 'images/' . str_replace('.', 'A', uniqid(rand(), true)) . $type;

                // simpan di server
                Storage::put('public/' . $filename, $image);

                // Tag akhir yang dihasilkan adalah:
                //    <img class="server-image" src="/storage/images/[NAMA_RANDOM].[ekstensi_file]">
                return '<img class="server-image" src="/storage/' . $filename . '">';
            }, 
            $request->input('content')
        );

        $answer = new Answer;
        $answer->user_id = Auth::id();
        $answer->question_id = $forum->id;
        $answer->content = $request->input('content');
        $answer->save();

        return redirect()->route('forum.show', ['question' => $forum->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        //
    }
}
