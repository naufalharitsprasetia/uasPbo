@extends('interface.layouts.main')

@section('container')
    <div class="latihan-container bg-white rounded p-4 mx-3">
        <h1>Create Category</h1>
        <br>
        <form method="post" enctype="" action="/create-category">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="name" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control @error('name')
                is-invalid
                @enderror"
                    id="name" name="name" placeholder="Category"
                    onkeyup="document.getElementById('autoslug').value = this.value.replace(/\s+/g, '-').toLowerCase()"
                    value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <label for="slug" class="form-label">Slug</label>
                <input type="text"
                    class="form-control @error('slug')
                is-invalid
                @enderror" id="autoslug"
                    name="slug" placeholder="Slug" readonly value="{{ old('slug') }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Create</button>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
@endsection
