@extends('interface.layouts.main')

@section('container')
    <div class="latihan-container bg-white rounded p-4 mx-3">
        <h1><i class="fa-solid fa-star fa-spin me-1" style="color: #ffa50a;"></i> Papan Skor</h1>
        <br><br>
        <div class="materi-list">
            <table class="table">
                <thead class="table-success">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">XP</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="img/profile.jpg" alt="" width="32" height="32"
                                class="rounded-circle me-2">naufalharis</td>
                        <td>100 XP</td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
