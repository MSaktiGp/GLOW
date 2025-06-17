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
            @unless (!auth()->check())
            <div class="dropdown">
                <button class="btn d-flex align-items-center justify-content-center gap-2 rounded-pill"
                    style="background-color: white; border: 2px solid #e59cc6; color: #e59cc6;" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person fs-5"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ route('profil') }}">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
            @endunless
            @unless (auth()->check())
            <form class="d-flex">
                <a href="{{route('login')}}" class="btn btn-signin">
                    <i class="bi bi-person-circle"></i> Sign in
                </a>
            </form>
            @endunless
        </div>
    </nav>