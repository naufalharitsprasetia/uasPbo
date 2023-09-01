@extends('templates.main')
@section('container')
    {{-- Cover --}}
    <div class="cover-bg">
        <div class="container-fluid d-flex bg-cover justify-content-center align-items-center text-center">
            <div class="d-flex flex-column ">
                <h1 class="text-center fw-bolder jockey-font jf-shadow display-1">SIBETA</h1>
                <h2 class="text-center fw-bolder jockey-font jf-shadow">Situs Pembelajaran Tajwid</h2>
            </div>
        </div>
    </div>
    {{-- End Cover --}}
    <!-- Apa itu SIBETA -->
    <div class="row desc-container p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="order-2 py-5 col-12 col-lg-7">
            <h1 class="display-5 fw-bold mt-5">SIBETA itu apa ?</h1>
            <p class="col-md-8">
                SIBETA adalah Sebuah Platform Pembelajaran Ilmu Tajwid Berbasis Website, SIBETA Dirancang guna
                meningkatkan tingkat keminatan ummat islam dalam belajar tajwid, dan mempermudah setiap individu dari
                kita untuk belajar tajwid tanpa harus membeli buku atau pergi ke suatu tempat pembelajaran atau majlis.
            </p>
            <button class="btn btn-primary btn-lg" type="button">Detail</button>
        </div>
        <div class="order-1 desc-image col-12 col-lg-5">
            <img src="img/desc-img.png" alt="" class="img-fluid" />
        </div>
    </div>
    <!-- End -->
    {{-- Apa Yang Ditawarkan SIBETA --}}
    <div class="container">
        <h2 class="text-center">Apa Saja Yang Ditawarkan SIBETA ?</h2>
        <div class="row">
            {{-- 1 --}}
            <div class="col-4">
                <div class="card">
                    <img src="img/bg-blue.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Penjelasan</h5>
                        <p class="card-text">Materi-Materi Tajwid Dijelaskan Secara Pengertian dan Contoh2.</p>
                    </div>
                </div>
            </div>
            {{-- 2 --}}
            <div class="col-4">
                <div class="card">
                    <img src="img/bg-red.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Latihan</h5>
                        <p class="card-text">SIBETA menyediakan beberapa latihan untuk menguji seberapa paham seseorang akan
                            pelajaran yang sudah dipelajari.</p>
                    </div>
                </div>
            </div>
            {{-- 3 --}}
            <div class="col-4">
                <div class="card">
                    <img src="img/bg-green.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Quiz</h5>
                        <p class="card-text">Disini Juga Terdapat Quiz-Quiz Agar Pembelajaran Tajwid tidak terlalu
                            membosankan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End -->
@endsection
