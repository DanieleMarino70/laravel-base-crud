@extends('layouts.app')

@section('title', "Train' List")

@section('content')
    <div class="container rounded-2">
            <h5>Canzoni</h5>
            <div class="row g-3 text-center">
                @forelse ($songs as $song)
                {{-- @dd($train) --}}
                    @include('partials._songcard')
                @empty
                <h2>Non ci sono canzoni</h2>
                    
                @endforelse
            </div>
        </div>
@endsection
