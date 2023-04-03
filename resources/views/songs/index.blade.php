@extends('layouts.app')

@section('title', "Songs")

@section('content')
    <div class="container">
            <h5>Canzoni</h5>
            <div class="row row-cols-4 g-3 text-center">
                @forelse ($songs as $song)
                
                    @include('partials._songcard')
                @empty
                <h2>Non ci sono canzoni</h2>
                    
                @endforelse
            </div>
        </div>
@endsection