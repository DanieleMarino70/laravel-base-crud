<div class="col">
    <div class="card h-100" style="width: 18rem;">
        <img src={{$song->poster}} class="card-img-top" alt="...">
        <div class="card-body">
            <h4 class="card-title">{{$song->title}}</h4>
            <h5 class="card-subtitle mb-2 text-muted"> - {{$song->album}} - {{$song->author}}</h5>
            <a href="{{ route('songs.show', $song) }}" class="btn btn-primary">Vai al dettaglio</a>
            <a href="{{ route('songs.edit', $song) }}" class="btn btn-warning">Modifica</a>
        </div>
    </div>
</div>