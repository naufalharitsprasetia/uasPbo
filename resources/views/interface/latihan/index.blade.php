@extends('interface.layouts.main')

@section('container')
    <div class="latihan-container bg-white rounded p-4 mx-3 border border-opacity-75 border-success border-5">
        <button type="button" class="btn-close float-end" aria-label="Close"></button>
        <h1 class="fw-bold">Latihan</h1>
        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0"
            aria-valuemax="100">
            <div class="progress-bar  progress-bar-striped progress-bar-animated bg-success" style="width: 25%"></div>
        </div>

        <form action="">
            <h4 class="mt-3">1. Manakah Yang Termasuk Idgham Bi-Gunnah ??</h4>
            <div class="d-flex my-3 justify-center items-align-center flex-wrap">
                @for ($i = 0; $i < 5; $i++)
                    <div class="form-check mx-1 display-4">
                        <input type="radio" class="btn-check" name="options" id="option{{ $i }}"
                            autocomplete="off">
                        <label class="btn btn-lg btn-outline-success fw-bold " for="option{{ $i }}">
                            من لم
                        </label>
                    </div>
                @endfor
            </div>
            <a class="btn btn-primary" href="#" role="button">Lompati</a>
            {{-- <input class="btn btn-primary" type="submit" value="Lompati"> --}}
            <input class="btn btn-primary ms-auto float-end" type="submit" value="Periksa   ">
        </form>

    </div>
@endsection
