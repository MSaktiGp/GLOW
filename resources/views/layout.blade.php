<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body style="background-color: #f8f9fa;">
    <!-- Header -->
    <header class="bg-dark text-white py-3">
        <div class="container">
            <h3 class="text-center">LaraWeb</h3>
        </div>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg ">
        <div class="container"> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container my-4" style="min-height: 77vh">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-3 mt-auto">
        <div class="container">
            <p class="text-center mb-0">© 2025 LaraWeb. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
