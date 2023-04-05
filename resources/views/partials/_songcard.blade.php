<div class="col">
    <div class="card h-100" style="width: 18rem;">
        <img src={{$song->poster}} class="card-img-top" alt="...">
        <div class="card-body">
            <h4 class="card-title">{{$song->title}}</h4>
            <h5 class="card-subtitle mb-2 text-muted"> - {{$song->album}} - {{$song->author}}</h5>
            <a href="{{ route('songs.show', $song) }}" class="btn btn-primary">Vai al dettaglio</a>
            <a href="{{ route('songs.edit', $song) }}" class="btn btn-warning">Modifica</a>
            {{-- Button trigger modal --}}
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#song-card-modal-{{$song->id}}">
                Elimina
            </button>

        </div>
    </div>
</div>

{{-- Modal --}}
<div class="modal fade" id="song-card-modal-{{$song->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Attenzione!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Sei sicuro di eliminare:
        <br>
        <ul>
            <li>{{$song->title}}</li>
            <li>{{$song->album}}</li>
            <li>{{$song->author}}</li>
            <li>{{$song->editor}}</li>
            <li>{{$song->length}}</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        

        <form action="{{ route('songs.destroy', $song)}}" method="POST">
            @csrf
            @method('delete')
        
            <button class="btn btn-danger">Elimina</button>
        </form>
      </div>
    </div>
  </div>
</div>