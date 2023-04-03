@extends('layouts.app')

@section('title', "Dettaglio")

@section('content')
    <div class="container">
        
            <h5>Canzone</h5>
            <div class="card h-100" style="width: 18rem;">
                <img src={{$song->poster}} class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">{{$song->title}}</h4>
                    <h5 class="card-subtitle mb-2 text-muted"> - {{$song->album}} - {{$song->author}}</h5>
                    <a href="{{ route('songs.index') }}" class="">Torna indietro</a>
                </div>
            </div>
        </div>
@endsection