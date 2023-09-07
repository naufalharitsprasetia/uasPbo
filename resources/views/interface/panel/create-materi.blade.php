@extends('interface.layouts.main')

@section('container')
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none
        }
    </style>
    <div class="latihan-container bg-white rounded p-4 mx-3">
        <h1>Create Materi</h1>
        <br>
        <form action="/create-materi" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text"
                    class="form-control @error('judul')
                is-invalid
                @enderror" id="judul"
                    name="judul"
                    onkeyup="document.getElementById('autoslug').value = this.value.replace(/\s+/g, '-').toLowerCase()"
                    value="{{ old('judul') }}" placeholder="Judul">
                @error('judul')
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
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
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
                    name="desc" value="{{ old('desc') }}" rows="3"></textarea>
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
            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
            <trix-editor input="body"></trix-editor>
            <br>
            <div class="mb-3">
                <label for="contoh_gambar" class="form-label">Post contoh_gambar</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('contoh_gambar')
                    is-invalid
                @enderror"
                    type="file" id="contoh_gambar" name="contoh_gambar" onchange="previewImage()">
                @error('contoh_gambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="contoh_suara" class="form-label">Contoh Suara</label>
                <input class="form-control" type="file" id="contoh_suara" name="contoh_suara">
                <input type="text" class="form-control mt-2" placeholder="Text Suara" name="text_suara" id="text_suara">
            </div>
            <div class="mb-3">
                <label for="link_video" class="form-label">Link Video Yt</label>
                <br>
                <small class="text-secondary">contoh : "https://youtu.be/aE5MOKbVbYY?si=Fre3OiaJV9A1Y8bn"</small>
                <input class="form-control" type="text" id="link_video" name="link_video">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Create</button>
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
