@extends('interface.layouts.main')

@section('container')
    <div class="latihan-container bg-white rounded p-4 mx-3 border border-opacity-50 border-primary border-5">
        <h1 class="text-center">Profile</h1>
        <form action="/profil/edit" method="post">
            @csrf
            <img src="img/profile.jpg" alt="" width="128" height="128" class="rounded-circle me-2">
            <br><br>
            {{-- <div class="mb-3">
                <label for="image" class="form-label">Post Image</label>
                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block"
                        alt="">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5" alt="">
                @endif
                <input class="form-control @error('image')
                    is-invalid
                @enderror"
                    type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div> --}}
            <div class="mb-3">
                <label for="name" class="form-label">Full Name*</label>
                <input type="text" class="form-control" id="name" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="username" disabled>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password*</label>
                <input type="password" class="form-control" id="password" placeholder="New Password">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
        <div>
            <br>
            <div class="text-center">
                <i class="fa-solid fa-ranking-star fa-beat fa-2xl"></i>
                <br><br>
                <h3 class="btn btn-warning text-center">My Exp : 2540 Poin</h3>
            </div>
        </div>
    </div>
@endsection
