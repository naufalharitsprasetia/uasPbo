@extends('interface.layouts.main')

@section('container')
    <div class="latihan-container bg-white rounded p-4 mx-3">
        <h1 class="text-decoration-underline">Edit Jawaban</h1>
        <h3 class="text-dark">Pertanyaan :<span class="text-decoration-underline" style="color: red">
                {{ $jawaban->latihan->pertanyaan }}</span></h3>
        <hr>
        <form method="post" action="/create-jawaban/{{ $jawaban->id }}">
            @csrf
            @method('put')
            {{-- Input Jawaban --}}
            <div class="mb-3">
                <label for="jawaban" class="form-label">Jawaban</label>
                <input type="text" class="form-control @error('jawaban') is-invalid  @enderror" id="jawaban"
                    name="jawaban" placeholder="Jawaban" value="{{ old('jawaban', $jawaban->jawaban) }}">
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
                    @if (old('is_true', $jawaban->is_true) == true)
                        <option value="1" selected>Benar</option>
                        <option value="0">Salah</option>
                    @else
                        <option value="1">Benar</option>
                        <option value="0" selected>Salah</option>
                    @endif
                </select>
                @error('is_true')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br>
            {{-- Hidden Input -> latihan_id --}}
            <input type="hidden" name="latihan_id" value="{{ $jawaban->latihan->id }}">
            <button type="submit" class="btn btn-primary">Update Jawaban</button>
        </form>
    </div>
@endsection
