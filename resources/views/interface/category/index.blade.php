@extends('interface.layouts.main')

@section('container')
    {{-- Opening --}}
    <div class="card mx-4">
        <div class="card-header jockey-font">
            SIBETA
        </div>
        <div class="card-body">
            <h5 class="card-title">Ilmu Tajwid</h5>
            <p class="card-text">Ilmu Tajwid adalah ilmu yang mempelajari tata cara membaca al-qur'an yang baik dan
                benar.</p>
            <a href="#" class="btn btn-primary"><i class="fa-solid fa-book"></i> BUKU PANDUAN</a>
        </div>
        <div class="alert alert-danger mx-4" role="alert">
            Aplikasi Ini Masih Dalam Tahap Pengembangan, Mohon Dimaklukmi Jika Masih Banyak Yang Kurang 🙏🙏🙏
        </div>
    </div>
    {{-- End  --}}
    <br>
    <div class="row gap-4 justify-content-center me-4">

        @foreach ($categories as $category)
            {{-- Card  --}}
            <div class="shadow card mb-3 mt-3 border-0 p-2 floating" style="width: 180px;">
                <a href="/category/{{ $category->slug }}" class="text-decoration-none">
                    <div class="d-flex flex-column">
                        <div class=" border-end bg-card rounded">
                            <img src="img/card-img3.png" class="img-fluid rounded-start " alt="...">
                        </div>
                        <hr>
                        <h5 class="card-title text-dark fw-bold text-center">{{ $category->name }}</h5>
                    </div>
                </a>
            </div>
            {{-- End Card --}}
        @endforeach
    </div>
@endsection
