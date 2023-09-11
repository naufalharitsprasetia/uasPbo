@extends('interface.layouts.main')

@section('container')
    <div class="latihan-container bg-white rounded p-4 mx-3 border border-opacity-75 border-primary border-5">
        <h1>Bab | {{ $category->name }}</h1>
    </div>
    <br>
    <div class="row">
        @foreach ($category->materis as $materi)
            <div class="col-9">
                <div class="card mb-3 mx-3 border-2 border-primary">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/bg-isi-materi.png" class="img-fluid rounded-start" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold mt-1">{{ $materi->judul }}</h5>
                                <hr>
                                <p class="card-text">{{ $materi->desc }}</p>
                                <a href="/learn/{{ $materi->slug }}" class="btn btn-primary my-2 float-end">Mulai</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
