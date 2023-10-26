<!-- Start NAVBAR -->
<nav class="navbar navbar-expand-lg sticky-top bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand d-flex me-5 pe-5 jockey-font align-items-center" href="#">
            <img src="img/logoicon.png" alt="Logo" width="30" height="30"
                class="d-inline-block align-text-top mx-2" />
            SIBETA
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-5 ps-5" id="navbarNavDropdown">
            {{-- MX Auto Untuk Di Tengah --}}
            <ul class="navbar-nav mx-auto fw-bold">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active-nav' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category">Materi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/latihan">Latihan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'about' ? 'active-nav' : '' }}" href="/about">About</a>
                </li>
            </ul>
            {{-- MS Auto Untuk Di Kanan --}}
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/profil"><i class="bi bi-layout-text-sidebar-reverse"></i>
                                    My Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item bg-button-primary">
                        <a href="/login" class="nav-link text-button-primary">Login</a>
                    </li>
                    <li class="nav-item bg-button-secondary">
                        <a href="/register" class="nav-link text-button-secondary">Register</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<!-- End NAVBAR  -->
