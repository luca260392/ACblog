<a href="{{route('console.show', $console)}}" class="link-games">
    <div class="card">
      <img src="{{ Storage::url($console->logo) }}" alt="{{ $console->title }}" class="card-img">
      <h5 class="heading">
        {{ $console->name }}
      </h5>
      <p>
        {{ $console->brand }}
      </p>
    </div>
  </a>