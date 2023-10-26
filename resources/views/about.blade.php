@extends('templates.main')
@section('container')
    <div class="container-fluid p-5">
        {{-- <div class="alert alert-danger" role="alert">
            Aplikasi Ini Masih Dalam Tahap Pengembangan, Mohon Dimaklukmi Jika Masih Banyak Yang Kurang 🙏🙏🙏
        </div> --}}
        {{-- <hr> --}}
        <h1 class="text-center text-decoration-underline">About</h1>
        <h2 class="jockey-font">SIBETA</h2>
        <p>"SIBETA, yang merupakan singkatan dari 'Situs Pembelajaran Tajwid,' adalah sebuah platform inovatif yang
            didedikasikan untuk membantu individu meningkatkan pemahaman mereka terhadap Tajwid, seni dan ilmu dalam membaca
            Al-Quran dengan benar. Dengan visi untuk memberikan akses mudah kepada materi berkualitas tinggi tentang Tajwid,
            SIBETA telah dibangun oleh tim yang berkomitmen untuk mendukung pengguna dalam perjalanan mereka menuju membaca
            Al-Quran dengan suara yang indah dan tepat..</p>
        <p>Dengan SIBETA, Anda dapat mengeksplorasi aspek Tajwid, memahami aturan-aturan inti, serta berlatih untuk
            meningkatkan keterampilan bacaan Al-Quran Anda. Kami percaya bahwa pembelajaran Tajwid adalah sebuah perjalanan
            yang berharga, dan SIBETA hadir untuk mendukung Anda dalam mencapai kesempurnaan dalam membaca Al-Quran.</p>
        <p>Kami sangat bangga menjadi bagian dari perjalanan pembelajaran Anda, dan kami siap membantu Anda menggali lebih
            dalam dalam keindahan Tajwid. Bergabunglah dengan kami di SIBETA dan mulailah perjalanan Anda untuk menjadi
            pembaca Al-Quran yang lebih baik dan lebih berpengetahuan."</p>
        <hr>
        {{-- Collaburator --}}
        <div class="collaburators">
            <h2 class="text-center">Collaburators</h2>
            <br>
            <div class="d-flex colab-card justify-content-center align-items-center">
                <div class="card bg-button-secondary border-0 mx-3" style="width: 18rem;">
                    <img src="img/colab-1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title jocky-font text-center fw-bold">Naufal Harits Prasetia</h5>
                        <p class="card-text odibee-font text-center mb-0">Student At University Of Darussalam Gontor</p>
                        <h6 class="card-text odibee-font text-center">(Chief Of Collaburators)</h6>
                    </div>
                </div>
                <div class="card bg-button-primary border-0 mx-3" style="width: 18rem;">
                    <img src="img/colab-2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title jocky-font text-center fw-bold">Mohamad Farhat</h5>
                        <p class="card-text odibee-font text-center">Student At University Of Darussalam Gontor</p>
                    </div>
                </div>
                <div class="card bg-button-secondary border-0 mx-3" style="width: 18rem;">
                    <img src="img/colab-3.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title jocky-font text-center fw-bold">Muhammad Rafi Aditya</h5>
                        <p class="card-text odibee-font text-center">Student At University Of Darussalam Gontor</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- END --}}
        {{-- Supported By --}}
        <hr>
        <div class="supported-by">
            <h2 class="text-center">Supported By : </h2>
            <div class="d-flex justify-content-center align-items-center">
                <div class="text-center mx-4">
                    <img src="img/unida.png" class="img-fluid rounded " alt="..." style="width: 7rem;">
                </div>
                <div class="text-center mx-4">
                    <img src="img/ti.png" class="img-fluid rounded " alt="..." style="width: 7rem;">
                </div>
                <div class="text-center mx-4">
                    <img src="img/dawet.png" class="img-fluid rounded " alt="..." style="width: 12rem;">
                </div>
                <div class="text-center mx-4">
                    <img src="img/hmp.png" class="img-fluid rounded " alt="..." style="width: 8rem;">
                </div>
            </div>
        </div>
        {{-- END --}}
        {{-- Built With --}}
        <hr>
        <div class="built-with">
            <h2 class="text-center">Built With : </h2>
            <div class="d-flex justify-content-center align-items-center">
                <div class="text-center mx-4">
                    <img src="img/laravel2.png" class="img-fluid rounded " alt="..." style="width: 6rem;">
                </div>
                <div class="text-center mx-4">
                    <img src="img/bootstrap.png" class="img-fluid rounded " alt="..." style="width: 8rem;">
                </div>
                <div class="text-center mx-4">
                    <img src="img/php.png" class="img-fluid rounded " alt="..." style="width: 10rem;">
                </div>
                <div class="text-center mx-4">
                    <img src="img/vscode.png" class="img-fluid rounded " alt="..." style="width: 6rem;">
                </div>
                <div class="text-center mx-4">
                    <img src="img/font-awesome.png" class="img-fluid rounded " alt="..." style="width: 10rem;">
                </div>
            </div>
        </div>
        {{-- END --}}
    </div>
@endsection
