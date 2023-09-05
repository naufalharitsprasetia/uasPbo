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
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3"></textarea>
            </div>
            <label for="body">Body</label>
            <input id="body" type="hidden" name="body">
            <trix-editor input="body"></trix-editor>
            <br>
            <div class="mb-3">
                <label for="suara" class="form-label">Conoh Suara</label>
                <input class="form-control" type="file" id="suara" name="suara">
                <span class="input-group-text" id="basic-addon1">Text Suara</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                    aria-describedby="basic-addon1">

            </div>
            <br>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>

    </div>
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endsection
