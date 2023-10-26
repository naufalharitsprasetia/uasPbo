@extends('templates.main')
@section('container')
    {{-- Cover --}}
    {{-- <div class="cover-bg">
        <div class="container-fluid d-flex bg-cover justify-content-center align-items-center text-center">
            <div class="d-flex flex-column ">
                <h1 class="text-center fw-bolder jockey-font jf-shadow display-1">SIBETA</h1>
                <h2 class="text-center fw-bolder jockey-font jf-shadow">Situs Pembelajaran Tajwid</h2>
            </div>
        </div>
    </div>
    End Cover --}}

    <!-- Hero Section Start -->
    <section class="hero" id="home">
        <main class="content">
            <h1 class="jockey-font">SI<span>BETA</span></h1>
            <h2 class="jockey-font">
                Situs Pembelajaran Tajwid
            </h2>
            <a href="#about" class="cta text-decoration-none">Detail</a>
        </main>
    </section>
    <!-- Hero Section End -->

    <!-- Apa itu SIBETA -->
    <div class="row desc-container p-5 mb-4 bg-body-tertiary rounded-3" id="about">
        <div class="order-2 py-5 col-12 col-lg-7">
            <h1 class="display-5 fw-bold mt-5">SIBETA itu apa ?</h1>
            <p class="col-md-8">
                SIBETA adalah Sebuah Platform Pembelajaran Ilmu Tajwid Berbasis Website, SIBETA Dirancang guna
                meningkatkan tingkat keminatan ummat islam dalam belajar tajwid, dan mempermudah setiap individu dari
                kita untuk belajar tajwid tanpa harus membeli buku atau pergi ke suatu tempat pembelajaran atau majlis.
            </p>
            <a class="btn btn-primary btn-lg" href="/about">Click For More</a>
        </div>
        <div class="order-1 desc-image col-12 col-lg-5">
            <img src="img/desc-img.png" alt="" class="img-fluid" />
        </div>
    </div>
    <!-- End -->
    {{-- Apa Yang Ditawarkan SIBETA --}}
    <div class="container">
        <h2 class="text-center mb-2">Apa Saja Yang Ditawarkan SIBETA ?</h2>
        <div class="row">
            {{-- 1 --}}
            <div class="col-lg-4 mb-2">
                <div class="card">
                    <img src="img/bg-learn.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Materi</h5>
                        <p class="card-text text-center">Materi Tajwid yang Komprehensif: Situs ini menyediakan akses ke
                            materi Tajwid yang mendalam dan lengkap, membantu pengguna untuk memahami dengan baik
                            aturan-aturan penting dalam membaca Al-Quran.</p>
                    </div>
                </div>
            </div>
            {{-- 2 --}}
            <div class="col-lg-4 mb-2">
                <div class="card">
                    <img src="img/bg-trainning.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Latihan</h5>
                        <p class="card-text text-center">Latihan Interaktif: Pengguna dapat mengasah keterampilan Tajwid
                            mereka melalui berbagai latihan interaktif yang disediakan oleh situs ini, sehingga mereka dapat
                            meningkatkan bacaan Al-Quran mereka dengan cepat.</p>
                    </div>
                </div>
            </div>
            {{-- 3 --}}
            <div class="col-lg-4 mb-2">
                <div class="card">
                    <img src="img/bg-diskusi.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Forum Diskusi</h5>
                        <p class="card-text text-center">Forum Diskusi yang Aktif: Situs ini memiliki forum diskusi yang
                            aktif, yang memungkinkan pengguna untuk berinteraksi dengan sesama pelajar Tajwid, bertukar
                            pengalaman, dan mendapatkan bantuan langsung dari ahli Tajwid.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- End -->
    <br>
    {{-- <div class="contatiner p-5">
        <h2 class="text-center">Contoh Tampilan SIBETA</h2>
        <div id="carouselExample" class="carousel slide p-5">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slide1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/slide2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/slide3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> --}}
@endsection
