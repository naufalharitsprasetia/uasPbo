@extends('interface.layouts.main')

@section('container')
    <div class="panel-container bg-white rounded p-4 mx-3">
        <h2 class="text-decoration-underline">Jawabans Of Pertanyaan</h2>
        @if (session()->has('success'))
            <div class="alert alert-success col-lg-12  alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ session('success') }}
            </div>
        @endif
        <div class="latihan-list">
            <h3>Pertanyaan : <span class="text-success">{{ $latihan->pertanyaan }}</span></h3>
            <br>
            <a href="/create-jawaban?latihan_id={{ $latihan->id }}" class="btn btn-success mb-2">Create Jawaban</a>
            <table class="table">
                <thead class="table-success">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jawaban</th>
                        <th scope="col">Kebenaran</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jawabans as $jawaban)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $jawaban->jawaban }}</td>
                            <td>
                                @if ($jawaban->is_true == 1)
                                    <button class="btn btn-success">Benar</button>
                                @else
                                    <button class="btn btn-danger">Salah</button>
                                @endif
                            </td>
                            <td>
                                <a href="" class="badge bg-info "><i class="bi bi-eye"></i></a>
                                <a href="" class="badge bg-warning "><i class="bi bi-pencil"></i></a>
                                <form action="" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm('Are you Sure?')"><i
                                            class="bi bi-x-circle"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
    </div>
@endsection
