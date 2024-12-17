<x-layout>
  <header class="vh-95 position-relative">
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
        <a class="navbar-brand text-white" href="/">
          <h2>ACBlog</h2>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
          <i class="bi bi-list text-white fs-2"></i>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav mx-auto">
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

    @if(session('message'))
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="alert alert-custom fade show border-0 shadow-lg bg-success" role="alert">
            {{session('message')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        </div>
      </div>
    </div>
    @endif

    <!-- Hero Content -->
    <div class="container h-75 d-flex align-items-center">
      <div class="text-center text-white mx-auto">
        <h1 class="display-1 mb-4 fw-bold">Assassin's Creed Blog</h1>
        <p class="lead">Benvenuto nel blog dedicato alla saga di Assassin's Creed</p>
      </div>
    </div>
  </header>




  {{-- sezione news --}}
  <section class="news py-5">
    <div class="container">
      <div class="row">
        <!-- News Item 1 -->
        <div class="col-md-4">
          <article class="news-item">
            <div class="news-meta mb-3">
              <span class="text-white-50">11.11.24 / in</span>
              <a href="#" class="text-primary text-decoration-none">Games</a>
            </div>
            <h3 class="text-white mb-3">Il miglior gioco online è ora disponibile!</h3>
            <p class="text-white-50 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida...</p>
            <a href="#" class="read-more text-white text-decoration-none text-uppercase">
              Scopri di più <i class="bi bi-chevron-double-right"></i>
            </a>
          </article>
        </div>

        <!-- News Item 2 -->
        <div class="col-md-4">
          <article class="news-item">
            <div class="news-meta mb-3">
              <span class="text-white-50">12.11.24 / in</span>
              <a href="#" class="text-primary text-decoration-none">Playstation</a>
            </div>
            <h3 class="text-white mb-3">I 5 migliori giochi di novembre</h3>
            <p class="text-white-50 mb-3">Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum labore suspendisse ultrices gravida...</p>
            <a href="#" class="read-more text-white text-decoration-none text-uppercase">
              Scopri di più <i class="bi bi-chevron-double-right"></i>
            </a>
          </article>
        </div>

        <!-- News Item 3 -->
        <div class="col-md-4">
          <article class="news-item">
            <div class="news-meta mb-3">
              <span class="text-white-50">13.11.24 / in</span>
              <a href="#" class="text-primary text-decoration-none">Reviews</a>
            </div>
            <h3 class="text-white mb-3">Ottieni questo gioco a un prezzo promozionale</h3>
            <p class="text-white-50 mb-3">Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida nididunt ut labore...</p>
            <a href="#" class="read-more text-white text-decoration-none text-uppercase">
              Scopri di più <i class="bi bi-chevron-double-right"></i>
            </a>
          </article>
        </div>
      </div>
    </div>
  </section>





  {{-- sezione nuove uscite --}}
  <section class="new-releases">
    <!-- Content Grid -->
    <div class="container-fluid px-0">
      <div class="row g-0">
        <!-- Left Image -->
        <div class="col-12 col-md-6">
          <img src="/media/nuove-uscite.jpg" alt="Nuovo gioco" class="img-fluid w-100 h-100 object-fit-cover">
        </div>
        <!-- Right Content -->
        <div class="right-content col-12 col-md-6 p-5 d-flex flex-column justify-content-center">
          <div class="content-wrapper">
            <div class="meta mb-3">
              <span class="text-white-50">11.11.18 / in</span>
              <a href="#" class="text-primary text-decoration-none">Games</a>
            </div>
            <h2 class="text-white mb-4">Il gioco che stavi aspettando è ora disponibile</h2>
            <p class="text-white-50 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vestibulum posuere porttitor justo id pellentesque. Proin id lacus feugiat, posuere erat sit amet, commodo ipsum. Donec pellentesque vestibulum metus...</p>
            <a href="#" class="read-more text-white text-decoration-none text-uppercase">
              Scopri di più <i class="bi bi-chevron-double-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Video Section -->
    <div class="video-container position-relative">
      <div class="overlay"></div>
      <iframe
      src="https://www.youtube.com/embed/vovkzbtYBC8?controls=0&autoplay=1&mute=1&loop=1&playlist=vovkzbtYBC8"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen
      class="w-100"
      ></iframe>
    </section>
  </x-layout>