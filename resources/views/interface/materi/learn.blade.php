@extends('interface.layouts.main')

@section('container')
    <div class="latihan-container bg-white rounded p-4 mx-3 border border-opacity-75 border-success border-5">
        <h1>Belajar | Idzhar Halqi</h1>
    </div>
    <br>
    <div class="latihan-container bg-success text-white rounded p-4 mx-3 border border-white border-5 fs-5"
        style="text-shadow: 0px 0px 7px  black">
        <div class="text-center">
            <h2 class="text-center">Ayok Belajar !!</h2>
            <img src="img/ayok-belajar.png" alt="" width="350">
        </div>
        <br>
        - Manakala ada Nun Sukun [ن] atau tanwin [ ً ٍ ٌ] bertemu salah satu huruf halqi [حروف حلقي] yang enam yakni :
        hamzah, haa, haa', 'ain, ghain, dan khoo<blockquote> [ء ح ه ع غ خ]</blockquote>- Maka hukum bacaannya disebut:
        <b>Idzhar Halqi</b>
        <blockquote>[إظهار حلقى]</blockquote>
        - Cara membacanya: harus dibaca dengan terang dan jelas sebab bertemu dengan huruf halqi.
        <blockquote>Contohnya : </blockquote>
        <blockquote>غفور حليم ، سميع عليم ، منه</blockquote>
        dan lain sebagainya.
        <br><br>
        - Keterangan:
        Idzhar artinya : menerangkan atau menjelaskan.
        Halqi artinya : kerongkongan.
        <br><br>
        <div class="text-center">
            <img src="img/paham.png" alt="" width="300">
            <br>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary border border-white border-2 btn-lg ">Ya, Saya Paham</button>
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
