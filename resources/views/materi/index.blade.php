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
        <div class="shadow card mb-3 mt-3 border-0 p-2" style="width: 250px;">
            <a href="">
                <div class="d-flex flex-column">
                    <div class=" border-end bg-card rounded">
                        <img src="img/card-img3.png" class="img-fluid rounded-start floating" alt="...">
                    </div>
                    <hr>
                    <h5 class="card-title">Nun Sukun Dan Tanwin</h5>
                </div>
            </a>
        </div>
        {{-- End Card --}}

    </div>
@endsection
