@extends('interface.layouts.main')

@section('container')
    {{-- <h1>Hello World</h1> --}}
    {{-- Opening --}}
    <div class="card mx-4">
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
    <br>
    <div class="row gap-4 justify-content-center me-4">

        @for ($i = 0; $i < 10; $i++)
            {{-- Card  --}}
            <div class="shadow card mb-3 mt-3 border-0 p-2 floating" style="width: 180px;">
                <a href="/materi" class="text-decoration-none">
                    <div class="d-flex flex-column">
                        <div class=" border-end bg-card rounded">
                            <img src="img/card-img3.png" class="img-fluid rounded-start " alt="...">
                        </div>
                        <hr>
                        <h5 class="card-title text-dark fw-bold text-center">Nun Sukun Dan Tanwin</h5>
                    </div>
                </a>
            </div>
            {{-- End Card --}}
        @endfor
    </div>
@endsection
