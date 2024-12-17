<footer class="footer">
    <div class="reviews-section">
        <div class="container">
            <!-- Form Section -->
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="text-white mb-4">Iscriviti per ricevere i nostri aggiornamenti</h2>
                    <form class="d-flex justify-content-center gap-3">
                        <input type="email" class="form-control w-50" placeholder="Inserisci la tua email">
                        <button type="submit" class="btn btn-light px-4">Iscriviti</button>
                    </form>
                </div>
            </div>

            <!-- Reviews Content -->
            <div class="text-center">
                <a class= "text-white mb-4" href="/">
                    <h3>ACBlog</h3>
                </a>
                <div class="d-flex justify-content-center gap-4 mb-4">
                    <a href="{{route('game.create')}}" class="text-white text-decoration-none">Aggiungi gioco</a>
                    <a href="{{route('game.index')}}" class="text-white text-decoration-none">Lista dei giochi</a>
                    <a href="{{route('console.create')}}" class="text-white text-decoration-none">Aggiungi una console</a>
                    <a href="{{route('console.index')}}" class="text-white text-decoration-none">Lista delle console</a>
                    <a href="#" class="text-white text-decoration-none">News</a>
                    <a href="#" class="text-white text-decoration-none">Contatti</a>
                </div>
                <div class="social-links">
                    <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-behance"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>