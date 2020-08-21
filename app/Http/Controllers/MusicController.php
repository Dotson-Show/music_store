<?php

namespace App\Http\Controllers;

use App\Music;
use App\Label;
use App\Genre;
use Illuminate\Http\Request;

class MusicController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $labels = Label::all();
        $genres = Genre::all();

        return view('music.create', compact('labels', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'file' => 'required',
            'file_type' => 'required',
            'picture' => 'required',
            'genre_id' => 'required',
            'label_id' => 'required',
            'release_year' => 'required',
        ]);


        $data['file']->store('musicfiles', 'public');
        $data['picture']->store('images', 'public');

        Music::create([
            'name' => $data['name'],
            'file' => $data['file']->hashName(),
            'file_type' => $data['file_type'],
            'picture' => $data['picture']->hashName(),
            'genre_id' => $data['genre_id'],
            'label_id' => $data['label_id'],
            'release_year' => $data['release_year'],
        ]);

        $success_msg = "<script>alert('Upload Successful')</script>";

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function show(Music $music)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function edit(Music $music)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Music $music)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function destroy(Music $music)
    {
        //
    }
}
