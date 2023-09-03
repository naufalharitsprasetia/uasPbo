<div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary position-fixed sidebar-materi">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <img src="img/logoicon.png" alt="Logo" width="30" height="30"
            class="d-inline-block align-text-top mx-2" />
        <span class="fs-4 jockey-font">SIBETA</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/" class="nav-link link-body-emphasis" aria-current="page">
                <i class="fa-solid fa-house fa-bounce me-1"
                    style="--fa-primary-color: #243e6b; --fa-secondary-color: #2454a8;"></i>
                Back To Home
            </a>
        </li>
        <li>
            <a href="/materi" class="nav-link link-body-emphasis {{ $active === 'materi' ? 'active-sidebar' : '' }}">
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
            <a href="/setting" class="nav-link link-body-emphasis {{ $active === 'setting' ? 'active-sidebar' : '' }}">
                <i class="fa-solid fa-gear fa-spin me-1" style="color: #9f1414;"></i>
                Setting
            </a>
        </li>
    </ul>
    <hr>
    <br><br><br><br><br><br>
    <div class="dropup-center dropup">
        <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="img/profile.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Naufal Harits</strong>
        </a>
        <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
        </ul>
    </div>
</div>
