@extends('interface.layouts.main')

@section('container')
    <div class="latihan-container bg-white rounded p-4 mx-3">
        <h1>Panel</h1>
        @if (session()->has('success'))
            <div class="alert alert-success col-lg-12" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <a href="/create-materi" class="btn btn-success">Create Materi</a>
        <a href="/create-category" class="btn btn-success">Create Category</a>
        <br>
        <br>
        <div class="materi-list">
            <h2>Materi List</h2>
            <table class="table">
                <thead class="table-success">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Idgham Mimi</td>
                        <td>jika ada nun sukun atau tanwin bertemu dengan mim</td>
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
    </div>
@endsection
