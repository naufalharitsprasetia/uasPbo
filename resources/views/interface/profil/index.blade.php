@extends('interface.layouts.main')

@section('container')
    <div class="latihan-container bg-white rounded p-4 mx-3 border border-opacity-50 border-primary border-5">
        <h1 class="text-center">Profile</h1>
        @if (session()->has('success'))
            <div class="alert alert-success col-lg-12" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <form action="/profil" method="post">
            @csrf
            <br>
            <div class="mb-3">
                <label for="name" class="form-label">Full Name*</label>
                <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" id="name"
                    placeholder="Nama" value="{{ old('name', auth()->user()->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control  @error('username') is-invalid @enderror" id="username"
                    name="username" placeholder="username" value="{{ old('name', auth()->user()->username) }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password*</label>
                <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password"
                    id="password" placeholder="New Password">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
@endsection
