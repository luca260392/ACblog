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
                  <ul class="navbar-nav mx-auto">
                      <li class="nav-item">
                          <a class="nav-link text-white" href="{{route('homepage')}}">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-white" href="{{route('game.create')}}">Aggiungi un gioco</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link text-white" href="{{route('console.create')}}">Aggiungi una console</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-white" href="{{route('console.index')}}">Lista delle console</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-white" href="{{route('articles.index')}}">News</a>
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
                <h3 class="display-4 mb-4 fw-bold">Lista dei giochi</h3>
                <p class="lead">Assassin's Creed Blog</p>
            </div>
        </div>
    </header>
</x-layout>