<div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary position-fixed sidebar-materi overflow-x-auto">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <img src="/img/logoicon.png" alt="Logo" width="30" height="30"
            class="d-inline-block align-text-top mx-2" />
        <span class="fs-4 jockey-font">SIBETA</span>
    </a>
    <button class="btn btn-light ms-auto me-5" id="hamburger-menu"><i class="fa-solid fa-bars fa-lg"></i></button>
    <hr>
    <div class="navbar-nav">
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="/" class="nav-link link-body-emphasis" aria-current="page">
                    <i class="fa-solid fa-house fa-bounce me-1"
                        style="--fa-primary-color: #243e6b; --fa-secondary-color: #2454a8;"></i>
                    Back To Home
                </a>
            </li>
            <li>
                <a href="/category"
                    class="nav-link link-body-emphasis {{ $active === 'materi' ? 'active-sidebar' : '' }}">
                    <i class="fa-solid fa-book me-2" style="color: #7899d0;"></i>
                    Materi
                </a>
            </li>
            <li>
                <a href="/latihan"
                    class="nav-link link-body-emphasis {{ $active === 'latihan' ? 'active-sidebar' : '' }}">
                    <i class="fa-solid fa-feather-pointed fa-flip me-2" style="color: #fe9d16;"></i>
                    Latihan
                </a>
            </li>
            <li>
                <a href="/papan-skor"
                    class="nav-link link-body-emphasis {{ $active === 'papan-skor' ? 'active-sidebar' : '' }}">
                    <i class="fa-solid fa-star fa-spin me-1" style="color: #ffa50a;"></i>
                    Papan Skor
                </a>
            </li>
            <li>
                <a href="/profil"
                    class="nav-link link-body-emphasis {{ $active === 'profil' ? 'active-sidebar' : '' }}">
                    <i class="fa-solid fa-user me-2"></i>
                    Profil
                </a>
            </li>
            <li>
                <a href="/forum-diskusi"
                    class="nav-link link-body-emphasis {{ $active === 'forum-diskusi' ? 'active-sidebar' : '' }}">
                    <i class="fa-regular fa-comments fa-fade"></i>
                    Forum Diskusi
                </a>
            </li>
            <hr>
            @can('admin')
                <li>
                    <a href="/panel" class="nav-link link-body-emphasis {{ $active === 'panel' ? 'active-sidebar' : '' }}">
                        <i class="fa-solid fa-pen-to-square fa-fade"></i>
                        Admin Panel
                    </a>
                </li>
                <hr>
            @endcan
        </ul>
    </div>
    {{-- Sound Start --}}
    <div class="sound-body">
        <audio id="player" src="/audio/alhijrotu.mp3"></audio>
        <div class="player">
            <div class="control">
                <i class="fa-solid fa-play" id="playbtn"></i>
            </div>
            <div class="info">
                Music
                <div class="bar">
                    <div id="progress"></div>
                </div>
            </div>
            <div id="current">0:00</div>
        </div>
    </div>
    {{-- Sound End --}}
    <hr>
    <div class="dropup-center dropup">
        <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="/img/profile_male.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>{{ auth()->user()->name }}</strong>
        </a>
        <ul class="dropdown-menu text-small shadow">
            {{-- <li><a class="dropdown-item" href="#">Settings</a></li> --}}
            <li><a class="dropdown-item" href="/profil">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>

{{-- Start SideResponsive --}}
<div class="absolute-nav position-fixed bg-white">
    <hr>
    <ul class="nav nav-pills list-side-nav flex-column mb-auto">
        <hr>
        <li class="nav-item">
            <a href="/" class="nav-link link-body-emphasis" aria-current="page">
                <i class="fa-solid fa-house fa-bounce me-1"
                    style="--fa-primary-color: #243e6b; --fa-secondary-color: #2454a8;"></i>
                Back To Home
            </a>
        </li>
        <li>
            <a href="/category" class="nav-link link-body-emphasis {{ $active === 'materi' ? 'active-sidebar' : '' }}">
                <i class="fa-solid fa-book me-2" style="color: #7899d0;"></i>
                Materi
            </a>
        </li>
        <li>
            <a href="/latihan" class="nav-link link-body-emphasis {{ $active === 'latihan' ? 'active-sidebar' : '' }}">
                <i class="fa-solid fa-feather-pointed fa-flip me-2" style="color: #fe9d16;"></i>
                Latihan
            </a>
        </li>
        <li>
            <a href="/papan-skor"
                class="nav-link link-body-emphasis {{ $active === 'papan-skor' ? 'active-sidebar' : '' }}">
                <i class="fa-solid fa-star fa-spin me-1" style="color: #ffa50a;"></i>
                Papan Skor
            </a>
        </li>
        <li>
            <a href="/profil" class="nav-link link-body-emphasis {{ $active === 'profil' ? 'active-sidebar' : '' }}">
                <i class="fa-solid fa-user me-2"></i>
                Profil
            </a>
        </li>
        <li>
            <a href="/forum-diskusi"
                class="nav-link link-body-emphasis {{ $active === 'forum-diskusi' ? 'active-sidebar' : '' }}">
                <i class="fa-regular fa-comments fa-fade"></i>
                Forum Diskusi
            </a>
        </li>
        <hr>
        @can('admin')
            <li>
                <a href="/panel" class="nav-link link-body-emphasis {{ $active === 'panel' ? 'active-sidebar' : '' }}">
                    <i class="fa-solid fa-pen-to-square fa-fade"></i>
                    Admin Panel
                </a>
            </li>
            <hr>
        @endcan
    </ul>
    {{-- Sound Start --}}
    <br><br><br>
    <br><br><br>
    <div class="sound-body sound-body-active">
        <audio id="player" src="/audio/alhijrotu.mp3"></audio>
        <div class="player">
            <div class="control">
                <i class="fa-solid fa-play" id="playbtn"></i>
            </div>
            <div class="info">
                Music
                <div class="bar">
                    <div id="progress"></div>
                </div>
            </div>
            <div id="current">0:00</div>
        </div>
    </div>
    {{-- Sound End --}}
    <br><br><br>
    <hr>
    <div class="dropup-center dropup dropup-active">
        <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="/img/profile_male.png" alt="" width="32" height="32"
                class="rounded-circle me-2">
            <strong>{{ auth()->user()->name }}</strong>
        </a>
        <ul class="dropdown-menu text-small shadow">
            {{-- <li><a class="dropdown-item" href="#">Settings</a></li> --}}
            <li><a class="dropdown-item" href="/profil">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>
{{-- End SideResponsive --}}
