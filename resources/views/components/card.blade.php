<a href="{{route('game.show', $game)}}" class="link-games">
  <div class="card">
    <img src="{{ Storage::url($game->cover) }}" alt="{{ $game->title }}" class="card-img">
    <h5 class="heading">
      {{ $game->title }}
    </h5>
    <p>
      {{ $game->producer }}
    </p>
  </div>
</a>