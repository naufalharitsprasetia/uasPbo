@extends('interface.layouts.main')

@section('container')
    <div class="latihan-container bg-white rounded p-4 mx-3 border border-opacity-75 border-primary border-5">
        <h1>Bab | Nun Sukun Dan Tanwin</h1>
    </div>
    <br>
    <div class="row">
        @for ($i = 0; $i < 6; $i++)
            <div class="col-9">
                <div class="card mb-3 mx-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/bg-isi-materi.png" class="img-fluid rounded-start" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold mt-1">Idzhar Halqi</h5>
                                <hr>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <a href="/learn" class="btn btn-primary mt-1 float-end">Mulai</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
@endsection
