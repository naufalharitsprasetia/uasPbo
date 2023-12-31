@extends('interface.layouts.main')

@section('container')
    <div class="panel-container bg-white rounded p-4 mx-3">
        <h1>Panel</h1>
        @if (session()->has('success'))
            <div class="alert alert-success col-lg-12 alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ session('success') }}
            </div>
        @endif
        <a href="/create-materi" class="btn btn-success mb-2">Create Materi</a>
        {{-- <a href="/create-category" class="btn btn-success mb-2">Create Category</a> --}}
        <a href="/create-latihan" class="btn btn-success mb-2">Create Latihan</a>
        <br>
        <br>
        <div class="latihan-list">
            <h2>Latihan List</h2>
            <table class="table">
                <thead class="table-success">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Pertanyaan</th>
                        <th scope="col">Materi</th>
                        <th scope="col">Jenis Pertanyaan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($latihans as $latihan)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $latihan->pertanyaan }}</td>
                            <td>{{ $latihan->materi->judul }}</td>
                            <td>{{ $latihan->jenis_pertanyaan->jenis_pertanyaan }}</td>
                            <td>
                                <a href="/create-latihan/{{ $latihan->id }}" class="badge bg-info "><i
                                        class="bi bi-eye"></i></a>
                                {{-- <a href="" class="badge bg-warning "><i class="bi bi-pencil"></i></a> --}}
                                <form action="/create-latihan/{{ $latihan->id }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="badge bg-danger border-0" onclick="return confirm('Are you Sure?')"><i
                                            class="bi bi-x-circle"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="materi-list">
            <h2>Materi List</h2>
            <table class="table">
                <thead class="table-success">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($materis as $materi)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $materi->judul }}</td>
                            <td>{{ $materi->desc }}</td>
                            <td>{{ $materi->category->name }}</td>
                            <td>
                                <a href="/create-materi/{{ $materi->slug }}" class="badge bg-info "><i
                                        class="bi bi-eye"></i></a>
                                <a href="/create-materi/{{ $materi->slug }}/edit" class="badge bg-warning "><i
                                        class="bi bi-pencil"></i></a>
                                <form action="/create-materi/{{ $materi->slug }}" method="post" class="d-inline">
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
        <div class="category-list">
            <h2>Category List</h2>
            <table class="table">
                <thead class="table-success">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $category->name }}</td>
                            {{-- <td>
                                <a href="" class="badge bg-info "><i class="bi bi-eye"></i></a>
                                <a href="" class="badge bg-warning "><i class="bi bi-pencil"></i></a>
                                <form action="" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm('Are you Sure?')"><i
                                            class="bi bi-x-circle"></i></button>
                                </form>
                            </td> --}}
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
