@extends('interface.layouts.main')

@section('container')
    <style>
        .sound-learn {
            box-sizing: border-box;
            font-family: sans-serif;
            letter-spacing: 1px;
            transition: all 0.35s linear;
            display: flex;
            justify-content: center;
            align-items: center;
            --bg2: #1ff01f;
            color: white;
        }

        .player2 {
            width: 300px;
            background-color: var(--bg2);
            display: grid;
            grid-template-columns: 48px 1fr 48px;
            padding: 2px 8px;
            position: relative;
            border-radius: 64px;
            cursor: pointer;
        }

        .control2,
        #current2 {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #playbtn2 {
            /* font-size: 12px; */
            /* color: transparent;
                                                                                                                                                            -webkit-text-stroke-width: 1px;
                                                                                                                                                            -webkit-text-stroke-color: rgb(255, 0, 255); */
            cursor: pointer;
        }

        #playbtn2:hover {
            -webkit-text-stroke-color: rgb(255, 0, 255);
        }

        .info2 {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 32px;
        }

        #current2 {
            text-align: right;
        }

        .bar2 {
            --space2: -2px;
            background-color: #24242424;
            overflow: hidden;
            left: var(--space2);
            right: var(--space2);
            top: var(--space2);
            bottom: var(--space2);
            position: absolute;
            border-radius: 64px;
            z-index: -2;
        }

        #progress2 {
            display: block;
            width: var(--progress2, 0%);
            background-color: rgb(255, 0, 255);
            transition: all 1s linear;
            height: 100%;
        }
    </style>
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
        <br>
        <hr>
        @if ($materi->contoh_suara !== null)
            <h3 class="text-center mb-3 text-decoration-underline">Contoh Suara</h3>
            {{-- Sound Start --}}
            <div class="sound-learn">
                <audio id="player2" src="/audio/{{ $materi->contoh_suara }}.wav"></audio>
                <div class="player2">
                    <div class="control2">
                        <i class="fa-solid fa-fade fa-play fa-lg" id="playbtn2"></i>
                    </div>
                    <div class="info2">
                        {{ $materi->text_suara }}
                        <div class="bar2">
                            <div id="progress2"></div>
                        </div>
                    </div>
                    {{-- <div id="current2">0:00</div> --}}
                </div>
            </div>
            {{-- Sound End --}}
        @endif
        <br>
        <hr>
        <div class="text-center">
            <h3>Apakah Kamu Sudah Memahami <br>
                Apa Itu <b>{{ $materi->judul }} ?</b></h3>
            <img src="/img/paham.png" alt="" width="300">
            <br>
        </div>
        <div class="text-center">
            <form action="/progress/add" method="post">
                @csrf
                <input type="hidden" name="exp" value="10">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="materi_id" value="{{ $materi->id }}">
                <button type="submit" class="btn btn-primary border border-white border-3 btn-lg "
                    onclick="return confirm('Apakah Kamu Paham?')">Ya,
                    Saya Paham</button>
            </form>
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
    <script>
        // SOUND JS
        var player = document.getElementById("player2");
        var player2 = document.querySelector(".player2");
        let progress = document.getElementById("progress2");
        let playbtn = document.getElementById("playbtn2");

        var playpause = function() {
            if (player.paused) {
                player.play();
            } else {
                player.pause();
            }
        };

        player2.addEventListener("click", playpause);

        player.onplay = function() {
            playbtn.classList.remove("fa-play");
            playbtn.classList.add("fa-pause");
        };

        player.onpause = function() {
            playbtn.classList.add("fa-play");
            playbtn.classList.remove("fa-pause");
        };
        player.ontimeupdate = function() {
            let ct = player.currentTime;
            ct.innerHTML = timeFormat(ct);
            // Progress
            let duration = player.duration;
            let prog = (ct * 100) / duration;
            progress.style.setProperty("--progress2", prog + "%");
        };

        function timeFormat(ct) {
            let minutes = Math.floor(ct / 60);
            let seconds = Math.floor(ct % 60);

            if (seconds < 10) {
                seconds = "0" + seconds;
            }
            return minutes + ":" + seconds;
        }
    </script>
@endsection
