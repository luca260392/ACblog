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
                <h3 class="display-4 mb-4 fw-bold">Aggiungi un gioco</h3>
                <p class="lead">Assassin's Creed Blog</p>
            </div>
        </div>
    </header>



    {{-- form --}}
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="bg-dark-custom border-0 shadow-lg">
                    <div class= "p-4">
                        <form method="POST" action="{{route('game.store')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-4">
                                <label for="title" class="form-label fw-bold text-secondary-custom">
                                    <i class="bi bi-controller me-2"></i>Titolo del gioco
                                </label>
                                <input type="text"
                                class="form-control form-control-custom @error('title') is-invalid @enderror"
                                id="title"
                                name="title"
                                value="{{old('title')}}">
                                @error('title')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="producer" class="form-label fw-bold text-secondary-custom">
                                    <i class="bi bi-building me-2"></i>Produttore
                                </label>
                                <input type="text"
                                class="form-control form-control-custom @error('producer') is-invalid @enderror"
                                id="producer"
                                name="producer"
                                value="{{old('producer')}}">
                                @error('producer')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="price" class="form-label fw-bold text-secondary-custom">
                                    <i class="bi bi-currency-euro me-2"></i>Prezzo
                                </label>
                                <input type="number"
                                class="form-control form-control-custom @error('price') is-invalid @enderror"
                                id="price"
                                name="price"
                                min="0"
                                step="0.01"
                                value="{{old('price')}}">
                                @error('price')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="cover" class="form-label fw-bold text-secondary-custom">
                                    <i class="bi bi-file-image me-2"></i>Copertina
                                </label>
                                <input type="file"
                                class="form-control form-control-custom @error('cover') is-invalid @enderror"
                                id="cover"
                                name="cover"
                                value="{{old('cover')}}">
                                @error('cover')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="description" class="form-label fw-bold text-secondary-custom">
                                    <i class="bi bi-file-text me-2"></i>Descrizione
                                </label>
                                <textarea class="form-control form-control-custom @error('description') is-invalid @enderror"
                                id="description"
                                name="description"
                                rows="4">{{old('description')}}</textarea>
                                @error('description')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-custom btn-lg px-5 fw-bold">
                                    <i class="bi bi-plus-circle me-2"></i>Aggiungi Gioco
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>