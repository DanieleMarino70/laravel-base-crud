@extends('layouts.app')

@section('title', "Songs")

@section('content')
    <div class="container">
            <div class="d-flex justify-content-between mt-3 mb-3">
                <h5>Canzoni</h5>
                <a href="{{ route('songs.create')}}" type="button" class="btn btn-primary">Aggiungi Canzone</a>
            </div>
            <div class="row row-cols-4 g-3 text-center">
                @forelse ($songs as $song)
                
                    @include('partials._songcard')
                @empty
                <h2>Non ci sono canzoni</h2>
                    
                @endforelse
            </div>
            {{$songs->links('pagination::bootstrap-5')}}
        </div>
@endsection