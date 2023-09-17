@extends('interface.layouts.main')

@section('container')
    <div class="latihan-container bg-white rounded p-4 mx-3">
        <h1 class="text-decoration-underline">Create Jawaban</h1>
        <h3 class="text-primary">Pertanyaan : {{ $latihan->pertanyaan }}</h3>
        <hr>
        <form method="post" action="/create-jawaban">
            @csrf
            {{-- Input Jawaban --}}
            <div class="mb-3">
                <label for="jawaban" class="form-label">Jawaban</label>
                <input type="text" class="form-control @error('jawaban') is-invalid  @enderror" id="jawaban"
                    name="jawaban" placeholder="Jawaban" value="{{ old('jawaban') }}">
                @error('jawaban')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Input Benar/Salah --}}
            <div class="mb-3">
                <label for="is_true" class="form-label">Jenis Pertanyaan</label>
                <select class="form-select" name="is_true" id="is_true">
                    <option value="1">Benar</option>
                    <option value="0" selected>Salah</option>
                </select>
                @error('is_true')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br>
            {{-- Hidden Input -> latihan_id --}}
            <input type="hidden" name="latihan_id" value="{{ $latihan->id }}">
            <button type="submit" class="btn btn-primary">Create Jawaban</button>
        </form>
    </div>
@endsection
