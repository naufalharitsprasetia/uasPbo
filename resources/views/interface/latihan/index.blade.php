@extends('interface.layouts.main')

@section('container')
    <div class="latihan-container bg-white rounded p-4 mx-3 border border-opacity-75 border-success border-5">
        <button type="button" class="btn-close float-end" aria-label="Close"></button>
        <h1 class="fw-bold">Latihan | Izhar Haqiqi</h1>
        <?php $pembagian = 100 / $latihans->total(); ?>
        <h4>Total Soal : <?= $latihans->total() ?></h4>
        <div class="progress" role="progressbar">
            <div class="progress-bar  progress-bar-striped progress-bar-animated bg-success"
                style="width: {{ $latihans->currentPage() * $pembagian }}%"></div>
        </div>
        <form action="" method="post">
            @csrf
            @foreach ($latihans as $latihan)
                <h4 class="mt-3">{{ $latihans->currentPage() }}. {{ $latihan->pertanyaan }}</h4>
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
            @endforeach
            <a class="btn btn-primary" href="{{ $latihans->previousPageUrl() }}" role="button">Back</a>
            <a class="btn btn-primary ms-auto float-end" href="{{ $latihans->nextPageUrl() }}" role="button">Next</a>
            {{-- <input class="btn btn-primary" type="submit" value="Lompati"> --}}
            @if ($latihans->currentPage() === $latihans->lastPage())
                <div class="text-center ms-auto">
                    <button class="btn btn-warning" type="submit">Periksa</button>
                </div>
            @endif
        </form>
    </div>
    <div class="">
        <br>
        {{ $latihans->links() }}
    </div>
@endsection
