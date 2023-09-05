@extends('interface.layouts.main')

@section('container')
    <div class="latihan-container bg-white rounded p-4 mx-3">
        <h1>Create Category</h1>
        <br>
        <form action="/create-materi" method="post">
            @csrf
            <div class="mb-3">
                <label for="category" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" id="category" placeholder="Category">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
