@extends('layouts.app')


@section('title', "Modifica Canzone")


@section('content')
    <div class="container">
        @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('songs.update', $song) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titolo canzone" value="{{$song->title}}">
            </div>

            <div class="mb-3">
                <label for="album" class="form-label">Album</label>
                <input type="text" class="form-control" id="album" name="album" placeholder="Nome album" value="{{$song->album}}">
            </div>

            <div class="mb-3">
                <label for="author" class="form-label">Autore</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Nome Autore" value="{{$song->author}}">
            </div>

            <div class="mb-3">
                <label for="editor" class="form-label">Editore</label>
                <input type="text" class="form-control" id="editor" name="editor" placeholder="Nome Editore" value="{{$song->editor}}">
            </div>

            <div class="mb-3">
                <label for="length" class="form-label">Lunghezza brano</label>
                <input type="number" class="form-control" id="length" name="length" step="0.01" placeholder="Lunghezza in decimale" value="{{$song->length}}">
            </div>

            <div class="mb-3">
                <label for="poster" class="form-label"></label>
                <input type="text" class="form-control" id="poster" name="poster" placeholder="" value="https://picsum.photos/200/300">
            </div>
            <button class="btn btn-secondary">Salva Modifica</button>
        </form>
    </div>
    
@endsection