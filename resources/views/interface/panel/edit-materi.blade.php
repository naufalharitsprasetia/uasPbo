@extends('interface.layouts.main')

@section('container')
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none
        }
    </style>
    <div class="latihan-container bg-white rounded p-4 mx-3">
        <h1>Edit Materi</h1>
        <br>
        <form action="/create-materi/{{ $materi->slug }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text"
                    class="form-control @error('judul')
                is-invalid
                @enderror" id="judul"
                    name="judul"
                    onkeyup="document.getElementById('autoslug').value = this.value.replace(/\s+/g, '-').toLowerCase()"
                    value="{{ old('judul', $materi->judul) }}" placeholder="Judul">
                @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <label for="slug" class="form-label">Slug (Otomatis)</label>
                <input type="text"
                    class="form-control @error('slug')
                is-invalid
                @enderror" id="autoslug"
                    name="slug" placeholder="Slug" readonly value="{{ old('slug', $materi->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        @if (old('category_id', $materi->category_id) == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Description</label>
                <textarea class="form-control @error('desc')
                is-invalid
                @enderror" id="desc"
                    name="desc" rows="3">{{ old('desc', $materi->desc) }}</textarea>
                @error('desc')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <label for="body">Body</label>
            @error('body')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body', $materi->body) }}">
            <trix-editor input="body"></trix-editor>

            <br>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
