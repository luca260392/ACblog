<x-layout>
    <header class="vh-70 position-relative">
        <!-- Social Links -->
        <div class="container">
            <div class="row py-2">
                <div class="col text-end">
                    <span class="text-white me-3">Seguici su:</span>
                    <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-behance"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
        </div>

        <!-- Navbar -->
        <nav class="navbar">
            <div class="container nav-container">
                <a class="navbar-brand text-white" href="{{route('homepage')}}">
                    <h2>ACBlog</h2>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                    <i class="bi bi-list text-white fs-2"></i>
                </button>

                <div class="navbar-collapse collapse" id="navbarContent">
                    <div class="navbar-collapse collapse" id="navbarContent">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{route('homepage')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{route('game.create')}}">Aggiungi un gioco</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{route('game.index')}}">Lista dei giochi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{route('console.create')}}">Aggiungi una console</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{route('console.index')}}">Lista delle console</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Contatti</a>
                            </li>
                        </ul>
                    @auth
                    <div class="navbar-nav">
                        <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">
                        Ciao, adepto {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{route('dashboard')}}">
                                <i class="bi bi-person me-2"></i>Il tuo profilo
                              </a></li>
                            <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">
                                <i class="bi bi-box-arrow-right"></i> Logout, vai in missione
                            </a></li>
                            <form action="{{route('logout')}}" method="POST" id="form-logout" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </div>
                    @endauth
                    @guest
                    <div class="navbar-nav">
                        <a class="nav-link text-white" href="{{route('login')}}">Entra/Registrati</a>
                    </div>
                    @endguest
                </div>
            </div>
        </nav>

        <!-- Hero Content -->
        <div class="container h-75 d-flex align-items-center">
            <div class="text-center text-white mx-auto">
                <h3 class="display-4 mb-4 fw-bold">{{$game->title}}</h3>
            </div>
        </div>
    </header>

    <!-- Game Detail Section -->
    <section class="container my-5">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="cardShow border-0 shadow-lg justify-content-center">
                    <img src="{{ Storage::url($game->cover) }}" alt="{{$game->title}}" class="card-img-top rounded">

                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="cardShow border-0 shadow-lg p-3 justify-content-center">
                    <div class="cardShow-body">
                        <h4 class="text-dark">Dettagli del Gioco:</h4>
                        <h2 class="card-title text-primary mb-3">{{$game->title}}</h2>
                        <p class="card-text">{{$game->description}}</p>
                        <p class="card-text"><strong>Produttore:</strong> {{$game->producer}}</p>
                        <p class="card-text"><strong>Prezzo:</strong> €{{$game->price}}</p>
                        <p class="card-text"><strong>Inserito da:</strong> {{$game->user_id ? $game->user->name : 'Adepto sconosciuto'}}</p>
                    </div>
                    <a href="{{route('game.index')}}" class="btn-consoleShow">Torna alla lista dei giochi</a>

                    {{-- se l'utente visualizza il gioco da lui inserito vede i seguenti pulsanti, altrimenti no --}}
                    @if (Auth::user() && Auth::user()->id == $game->user_id)
                        <a href="{{route('game.edit', $game)}}" class="btn-consoleShow">Modifica il gioco</a>
                        {{-- overright del metodo POST (<a> accetta solo GET) --}}
                        <form action="{{route('game.destroy', $game)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn-consoleShow w-100">Elimina il gioco</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </section>
</x-layout>