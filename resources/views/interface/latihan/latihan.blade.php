@extends('interface.layouts.main')

@section('container')
    <div class="latihan-container bg-white rounded p-4 mx-3 border border-opacity-75 border-success border-5">

        <h1 class="fw-bold">Latihan | Izhar Haqiqi</h1>
        <h4>Total Soal : {{ count($latihans) }}</h4>
        @if (session()->has('latihanError'))
            <div class="alert alert-danger alert-dismissible fade show fw-normal fs-6" role="alert">
                {{ session('latihanError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('messages'))
            <div class="alert alert-info">
                <ul>
                    @foreach (session('messages') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{--  --}}
        <?php $benar = 5; ?>
        <hr>
        <form action="/proses-form" method="post">
            @csrf
            <input type="hidden" name="jumlah_pertanyaan" value="{{ count($latihans) }}">
            @foreach ($latihans as $latihan)
                @php
                    // Ambil jawaban yang telah dijawab dari session
                    $jawabanTerjawab = session('jawabanTerjawab.' . $latihan->id);
                @endphp
                @php
                    // Ambil jawaban yang telah dijawab dari session
                    $jawabanBenar = session('jawabanBenar.' . $latihan->id);
                @endphp
                {{-- Jika Sudah Menjawab --}}
                @if (session()->has('messages'))
                    <h4 class="mt-3">{{ $loop->iteration }}. {{ $latihan->pertanyaan }}</h4>
                    {{-- Tampilkan jawaban yang telah dijawab jika ada --}}
                    @if ($jawabanTerjawab === $jawabanBenar)
                        <?php $benar += 10; ?>
                        <div class="bg-success btn btn-success p-2">
                            <h5 class="text-white">Jawaban Anda : {{ $jawabanTerjawab }}</h5>
                        </div>
                    @else
                        <div class="bg-danger btn btn-danger p-2">
                            <h5 class="text-white">Jawaban Anda : {{ $jawabanTerjawab }}</h5>
                        </div>
                    @endif
                    @if ($jawabanBenar)
                        <h5 class="text-success p-2">Jawaban Benar : {{ $jawabanBenar }}</h5>
                    @endif
                    {{-- Jika Belum Jawab --}}
                @else
                    <h4 class="mt-3">{{ $loop->iteration }}. {{ $latihan->pertanyaan }}</h4>
                    <input type="hidden" name="pertanyaan_id[]" value="{{ $latihan->id }}">
                    <div class="d-flex my-3 justify-center items-align-center flex-wrap">
                        @foreach ($latihan->jawabans as $jawaban)
                            <div class="form-check mx-1 display-4">
                                <input type="radio" class="btn-check" name="jawaban[{{ $latihan->id }}]"
                                    id="option{{ $jawaban->id }}" value="{{ $jawaban->id }}" autocomplete="off">
                                <label class="btn btn-lg btn-outline-success fw-bold" for="option{{ $jawaban->id }}">
                                    {{ $jawaban->jawaban }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                @endif
            @endforeach
            {{-- Jika Sudah Menjawab --}}
            @if (session()->has('messages'))
                {{-- Jika Belum Jawab --}}
                <div class="text-center">
                    <a href="/selesai-latihan?materi_id={{ $materi->id }}&benar={{ $benar }}"
                        class="btn btn-primary ms-auto">Selesai</a>
                </div>
            @else
                <div class="text-center">
                    <input type="hidden" name="materi_slug" value="{{ $materi->slug }}">
                    <button class="btn btn-warning ms-auto" type="submit">Periksa</button>
                </div>
            @endif
        </form>
    </div>
    {{-- <div class="">
        <br>
        {{ $latihans->links() }}
    </div> --}}
@endsection
