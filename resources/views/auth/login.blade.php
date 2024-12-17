<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Assassin's Creed Blog</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Ramabhadra&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container-login my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 shadow-lg p-4">

                <h1 class="text-center text-secondary-custom fw-bold mb-4">Accedi alla Confraternita</h1>
                <form method="POST" action="{{route('login')}}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="form-label fw-bold text-secondary-custom">
                            <i class="bi bi-envelope me-2"></i>Email
                        </label>
                        <input type="email"
                        class="form-control form-control-custom"
                        id="email"
                        name="email"
                        value="{{old('email')}}">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label fw-bold text-secondary-custom">
                            <i class="bi bi-lock me-2"></i>Password
                        </label>
                        <input type="password"
                        class="form-control form-control-custom"
                        id="password"
                        name="password">
                    </div>

                    <div class="form-check mb-4">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label text-secondary-custom fw-bold" for="remember">
                            Ricordami
                        </label>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-custom btn-lg px-5 fw-bold">
                            <i class="bi bi-box-arrow-in-right me-2"></i>Accedi
                        </button>
                        <p class="mt-3 mb-1 fs-5">Ancora non fai parte della Confraternita?</p>
                        <a href="{{route('register')}}" class="fs-5 link-rec">Clicca qui per l'iniziazione</a>
                    </div>
                </form>
                <div class="text-center my-5">
                    <img src="media/logo.webp" alt="Logo" class="logo">
                </div>

            </div>
        </div>
    </div>
</body>
</html>