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
            --bg2: #ffca2c;
            color: black;
        }

        .player2 {
            width: 300px;
            background-color: var(--bg2);
            display: grid;
            grid-template-columns: 40px 1fr 6px;
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
            font-size: 24px;
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
    {{--  --}}
    <div class="latihan-container bg-white rounded p-4 mx-3 border border-opacity-75 border-success border-5">
        <h1 class="fw-bold">Latihan | {{ $materi->judul }}</h1>
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
                    {{-- Cek Jenis Pertanyaan --}}
                    @if ($latihan->jenis_pertanyaan_id === 2)
                        {{-- Sound Recognition --}}
                        <div class="text-center">
                            {{-- Kalimat Soal / Kata , Jawaban id 1 [salah] harakat lengkap --}}
                            <h2 class="btn btn-lg btn-success fw-bold ms-auto text-center fs-1 arabic-font "
                                style="letter-spacing: 1px;">
                                {{ $latihan->jawabans[0]->jawaban }}</h2>
                        </div>
                        {{-- Tap To Speech --}}
                        <div class="input-group my-5">
                            <span onclick="record()" class="btn btn-warning fs-5"><i
                                    class="fa-solid fa-microphone-lines fa-lg"></i>
                                Tap To Speak</span>
                            <input class="form-control fs-5" type="text" name="speech" id="speechToText"
                                placeholder="What Do You Speak" readonly value="" />
                        </div>
                        {{-- Jika Yang Kita Ucapkan Sama dengan Yang Diperintah , cek dengan jawaban id 2 benar --}}
                        <input type="hidden" name="jawaban[{{ $latihan->id }}]" value="{{ $latihan->jawabans[0]->id }}">
                        {{-- <input type="hidden" name="jawaban[{{ $latihan->id }}]" value="{{ $jawaban[0]->id }}"> --}}
                    @elseif ($latihan->jenis_pertanyaan_id === 3)
                        {{-- Listening --}}
                        {{-- Tap To Listen --}}
                        <div class="sound-learn my-2">
                            <audio id="player2" src="/audio/{{ $materi->contoh_suara }}.wav"></audio>
                            <div class="player2">
                                <div class="control2">
                                    <i class="fa-solid fa-fade fa-play fa-lg" id="playbtn2"></i>
                                </div>
                                <div class="info2">
                                    {{ 'Tap To Listen' }}
                                    <div class="bar2">
                                        <div id="progress2"></div>
                                    </div>
                                </div>
                                {{-- <div id="current2">0:00</div> --}}
                            </div>
                        </div>
                        {{-- Pilihan Jawaban --}}
                        <div class="d-flex my-3 justify-center items-align-center flex-wrap justify-content-center">
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
                        {{-- Jika Yang Kita Ucapkan Sama dengan Yang Diperintah , cek dengan jawaban id 2 benar --}}
                        <input type="hidden" name="" id="" value="">
                    @else
                        {{-- Multiple Choice --}}
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
                <br>
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

    <script>
        function record() {
            console.log('hii');
            var recognition = new webkitSpeechRecognition();
            recognition.lang = "ar";

            recognition.onresult = function(event) {
                console.log(event);
                document.getElementById("speechToText").value =
                    event.results[0][0].transcript;
            };
            recognition.start();
        }
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
