@extends('interface.layouts.main')

@section('container')
    <div class="latihan-container bg-white rounded p-4 mx-3">
        <h1><i class="fa-solid fa-star fa-spin me-1" style="color: #ffa50a;"></i> Papan Skor</h1>
        <br><br>
        <div class="materi-list">
            @if (session()->has('success'))
                <div class="alert alert-success col-lg-12" role="alert">
                    {{ session('success') }}
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

                    @foreach ($groupedProgress as $key => $userProgress)
                        @php
                            // Menghitung total XP untuk user tertentu
                            $totalXP = $userProgress->sum('exp');
                        @endphp
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td><img src="img/profile_{{ $userProgress[0]->user->gender }}.png" alt=""
                                    width="32" height="32"
                                    class="rounded-circle me-3">{{ $userProgress[0]->user->username }}</td>
                            @if ($userProgress[0]->user->username === auth()->user()->username)
                                @php
                                    $myExp = $totalXP;
                                    $myUrutan = $loop->iteration;
                                @endphp
                            @endif
                            <td>{{ $totalXP }} XP</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br><br>
            <h4>My Position : {{ $myUrutan }} from {{ count($groupedProgress) }}</h4>
            <h4>My Score : {{ $myExp }}</h4>
        </div>
    </div>
@endsection
