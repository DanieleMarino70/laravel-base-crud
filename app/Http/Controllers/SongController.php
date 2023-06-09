<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::paginate(4);
        // dd($songs);

        return view('songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:100',
            'album' => 'required|string|max:100',
            'author' => 'required|string|max:100',
            'editor' => 'required|string|max:100',
            'length' => 'required|decimal:2,3',
            'poster' => 'required|string|'

        ], [
            '*.required' => 'il :attribute è obbligatorio'
        ]);

        $data = $request->all();

        $song = new Song;
        $song->title = $data['title'];
        $song->album = $data['album'];
        $song->author = $data['author'];
        $song->editor = $data['editor'];
        $song->length = $data['length'];
        $song->poster = $data['poster'];
        $song->save();

        return redirect()->route('songs.show', compact('song'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {

        return view('songs.show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'album' => 'required|string|max:100',
            'author' => 'required|string|max:100',
            'editor' => 'required|string|max:100',
            'length' => 'required|decimal:2,3',
            'poster' => 'required|string|'

        ], [
            '*.required' => 'il :attribute è obbligatorio'
        ]);

        $data = $request->all();
        $song->title = $data['title'];
        $song->album = $data['album'];
        $song->author = $data['author'];
        $song->editor = $data['editor'];
        $song->length = $data['length'];
        $song->poster = $data['poster'];
        $song->save();


        return redirect()->route('songs.show', $song);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        $song->delete();
        return redirect()->route('songs.index');
    }
}
