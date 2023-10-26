@extends('interface.layouts.main')

@section('container')
    <div class="latihan-container bg-white rounded p-4 mx-3 border border-opacity-50 border-primary border-5">
        <h1><i class="fa-solid fa-star fa-spin me-1" style="color: #ffa50a;"></i> Papan Skor</h1>
        <br>
        <div class="materi-list">
            @if (session()->has('tambah'))
                <div class="alert alert-success col-lg-12 alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ session('tambah') }}
                </div>
            @endif
            @if (session()->has('tambah'))
                <div class="alert alert-primary col-lg-12 alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <h1 class="text-center"><i class="fa-solid fa-hands-praying"></i> Doa Setelah Belajar</h1>
                    <h3 class="text-end">اَللّٰهُمَّ إِنِّيْ أَسْتَوْدِعُكَ مَا عَلَّمْتَنِيْهِ، فَارْدُدْهُ إِلَيَّ
                        عِنْدَ حَاجَتِيْ
                        إِلَيْهِ وَلَا تُنْسِنِيْهِ يَا رَبَّ الْعَالَمِيْنَ.</h3>
                    <h4 class="fst-italic">Allahumma innii astaudi’uka maa ‘allamtaniihi fardudhu ilayya inda haajatii ilahi
                        wa laa tunsiniihi
                        yaa rabbal ‘aalamiin.</h4>
                    <p>"Ya Allah sungguh aku titipkan kepada Mu apa yang telah Engkau ajarkan kepadaku, Kembalikanlah ia
                        kepadaku ketika aku butuhkan, dan janganlah Engkau lupakan dariku Wahai Tuhan Semesta Alam."</p>
                </div>
            @endif

            <table class="table">
                <thead class="table-success">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">XP</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        // Mengelompokkan data berdasarkan user_id dan menjumlahkan exp
                        $groupedProgress = $progress->groupBy('user_id')->sortByDesc(function ($userProgress) {
                            return $userProgress->sum('exp');
                        });
                    @endphp
                    @php
                        $myUrutan = 0;
                        $myExp = 0;
                    @endphp

                    @foreach ($groupedProgress as $key => $userProgress)
                        @php
                            $i = 0;
                            // Menghitung total XP untuk user tertentu
                            $totalXP = $userProgress->sum('exp');
                        @endphp
                        <tr @if ($userProgress[$i]->user->username === auth()->user()->username) class="table-warning" @endif>
                            <th scope="row">
                                {{ $loop->iteration }}</th>
                            <td><img src="img/profile_{{ $userProgress[0]->user->gender }}.png" alt=""
                                    width="32" height="32"
                                    class="rounded-circle me-3">{{ $userProgress[0]->user->username }}</td>
                            @if ($userProgress[$i]->user->username === auth()->user()->username)
                                <?php
                                $myUrutan = $loop->iteration;
                                $myExp = $totalXP;
                                ?>
                            @endif
                            <td>{{ $totalXP }} XP</td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
            <br><br>
            <h4>My Position : {{ $myUrutan }} from {{ count($groupedProgress) }}</h4>
            <h4>My Score : {{ $myExp }}</h4>
        </div>
    </div>
@endsection
