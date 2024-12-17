@props(['game'])
<div class="card h-100">
    @if($game->cover)
        <img src="{{Storage::url($game->cover)}}" class="card-img-top" alt="{{$game->title}}">
    @else
        <img src="/img/default-placeholder.jpg" class="card-img-top" alt="default placeholder">
    @endif
    <div class="card-body">
        <h5 class="card-title">{{$game->title}}</h5>
        <p class="card-text">{{$game->producer}}</p>
        <div class="d-flex justify-content-between align-items-center">
            <p class="card-text">€ {{$game->price}}</p>
            <a href="{{route('game.show', $game)}}" class="btnIndexGame">Dettagli</a>
        </div>
    </div>
</div>