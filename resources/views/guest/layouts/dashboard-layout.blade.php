<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
        <!-- Tailwind CSS-->
        {{-- <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet"> --}}
    
    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap-5.3.6-dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body class="d-flex flex-column min-vh-100">

    {{-- Navbar --}}
    <nav class="navbar fixed-top text-white navbar-expand-sm navbar-dark py-2" style="background-color: #F189B8;">
        <div class="container-fluid my-2 mx-3">
            <a class="navbar-brand fw-bold" href="#">GLOW</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about-us">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#classes">Classes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact-us">Contact Us</a></li>
                </ul>
            </div>
            <form class="d-flex">
                <a href="{{route('login')}}" class="btn btn-signin">
                    <i class="bi bi-person-circle"></i> Sign in
                </a>
            </form>
        </div>
    </nav>

    {{-- Main Content --}}
    <div class="flex-grow-1">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer class="text-white text-center py-3" style="background-color: #F189B8;">
        <p>&copy; 2025 Copyright: glowithus.com</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" 
            crossorigin="anonymous"></script>

   <script>
    document.addEventListener("DOMContentLoaded", function () {
        const offsets = {
            "#about-us": 200,
            "#classes": 80
        };

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const targetId = this.getAttribute('href');
                const target = document.querySelector(targetId);
                
                if (target && offsets[targetId] !== undefined) {
                    e.preventDefault();

                    const offset = offsets[targetId];
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - offset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: "smooth"
                    });
                }
            });
        });
    });
</script>


</body>
</html>
