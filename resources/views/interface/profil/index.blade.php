@extends('interface.layouts.main')

@section('container')
    <div class="latihan-container bg-white rounded p-4 mx-3 border border-opacity-50 border-primary border-5">
        <h1 class="text-center">Profile</h1>
        <form action="/profil/edit" method="post">
            @csrf
            <br>
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
