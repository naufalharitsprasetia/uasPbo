@extends('interface.layouts.main')

@section('container')
    <div class="latihan-container bg-white rounded p-4 mx-3 border border-opacity-75 border-danger border-5">
        <h1>Latihan</h1>

    </div>
    <br>
    <div class="row gap-4 justify-content-center me-4">

        @foreach ($materis as $materi)
            {{-- Card  --}}
            <div class="shadow card mb-3 mt-3 border-0 p-1 floating" style="width: 180px;">
                <a href="/latihan/{{ $materi->slug }}" class="text-decoration-none">
                    <div class="d-flex flex-column">
                        <br>
                        <h5 class="card-title text-dark fw-bold text-center">{{ $materi->judul }}</h5>
                        <hr>
                        <div class=" border-end bg-card rounded">
                            <img src="img/latihan.png" class="img-fluid rounded-start " alt="...">
                        </div>
                    </div>
                </a>
            </div>
            {{-- End Card --}}
        @endforeach
    </div>
@endsection
