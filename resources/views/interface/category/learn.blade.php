@extends('interface.layouts.main')

@section('container')
    <div class="latihan-container bg-white rounded p-4 mx-3 border border-opacity-75 border-success border-5">
        <h1>Belajar | {{ $materi->judul }}</h1>
    </div>
    <br>
    <div class="latihan-container bg-success text-white rounded p-4 mx-3 border border-white border-5 fs-5"
        style="text-shadow: 0px 0px 7px  black">
        <div class="text-center">
            <h2 class="text-center">Ayok Belajar !! 👨‍🏫</h2>
            <img src="/img/ayok-belajar.png" alt="" width="350">
        </div>
        <br>
        <h3 class="text-uppercase text-decoration-underline">{{ $materi->judul }}</h3>
        {!! $materi->body !!}
        <br><br>
        <hr>
        <div class="text-center">
            <h3>Apakah Kamu Sudah Memahami <br>
                Apa Itu <b>{{ $materi->judul }} ?</b></h3>
            <img src="/img/paham.png" alt="" width="300">
            <br>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary border border-white border-3 btn-lg ">Ya, Saya Paham</button>
        </div>
    </div>
    <br>
    <script>
        // Mengambil semua elemen <blockquote>
        var blockquotes = document.querySelectorAll('blockquote');

        // Mengubah style font-size pada semua elemen <blockquote>
        blockquotes.forEach(function(blockquote) {
            blockquote.style.fontSize = '1.8rem'; // Ganti ukuran font sesuai kebutuhan
        });

        // Mendeteksi teks Arab dalam elemen-elemen <blockquote>
        blockquotes.forEach(function(blockquote) {
            var arabicText = blockquote.textContent.match(
                /[\u0600-\u06FF]+/g); // Ekspresi reguler untuk mencari teks Arab

            if (arabicText) {
                blockquote.style.fontSize = '3.5rem'; // Ganti ukuran font sesuai kebutuhan
                blockquote.style.textAlign = 'right'; // Ganti Align
                blockquote.style.textShadow = '0px 0px 10px  black'; // Ganti Border
                blockquote.style.fontFamily = '"Noto Sans Arabic", sans-serif'; // Ganti nama font sesuai kebutuhan
            }
        });
    </script>
@endsection
