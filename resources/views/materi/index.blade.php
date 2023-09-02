@extends('materi.layouts.main')

@section('container')
    <div class="container-fluid main-content mt-4">
        {{-- <h1>Hello World</h1> --}}
        {{-- Opening --}}
        <div class="card">
            <div class="card-header jockey-font">
                SIBETA
            </div>
            <div class="card-body">
                <h5 class="card-title">Ilmu Tajwid</h5>
                <p class="card-text">Ilmu Tajwid adalah ilmu yang mempelajari tata acara membaca al-qur'an yang baik dan
                    benar.</p>
                <a href="#" class="btn btn-primary"><i class="fa-solid fa-book"></i> BUKU PANDUAN</a>
            </div>
        </div>
        {{-- End  --}}
        {{-- Card  --}}
        <div class="card mb-3 mt-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4 border-end">
                    <img src="img/hukum-mim-test.png" class="img-fluid rounded-start" alt="...">
                </div>

                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Card --}}
        <div class="row g-3 pt-4 text-center">
            <!-- Hukum Iqlab -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <button class="btn btn-outline-warning btn-lg card-materi-body rounded-circle">Iqlab</button>
                </a>
            </div>
            {{-- End --}}
            <!-- Hukum Nun Sukun Dan Tanwin -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <button class="btn btn-outline-warning btn-lg card-materi-body rounded-circle">Nun Sukun</button>
                </a>
            </div>
            {{-- End --}}
            <!-- Hukum Nun Sukun Dan Tanwin -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <button class="btn btn-outline-warning btn-lg card-materi-body rounded-circle">Makharijul Huruf</button>
                </a>
            </div>
            {{-- End --}}
            <!-- Hukum Ikhfa Completed -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <button class="btn materi-success btn-lg card-materi-body rounded-circle">✅</button>
                </a>
            </div>
            {{-- End --}}
            @for ($i = 0; $i < 10; $i++)
                <!-- Hukum Ikhfa -->
                <div class="col">
                    <a href="#" class="text-decoration-none">
                        <button class="btn btn-outline-warning btn-lg card-materi-body rounded-circle">Ikhfa</button>
                    </a>
                </div>
                {{-- End --}}
            @endfor
        </div>
    </div>
@endsection
