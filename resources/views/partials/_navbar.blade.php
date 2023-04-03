<div class="container">
    <nav class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link @if(Request::route()?->getName() == 'home') active @endif" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="{{ route('songs.index') }}" class="nav-link @if(Request::route()?->getName() == 'songs.index') active @endif" aria-current="page">Songs</a></li>
      </ul>
    </nav>
</div>
