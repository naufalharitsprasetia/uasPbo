@extends('interface.layouts.main')

@section('container')
    <div class="latihan-container bg-white rounded p-4 mx-3">
        <h1>Create Latihan</h1>
        <br>
        <form method="post" action="/create-latihan">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="pertanyaan" class="form-label">Pertanyaan</label>
                <input type="text"
                    class="form-control @error('pertanyaan')
                is-invalid
                @enderror"
                    id="pertanyaan" name="pertanyaan" placeholder="Pertanyaan" value="{{ old('pertanyaan') }}">
                @error('pertanyaan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="materi_id" class="form-label">Materi</label>
                    <select class="form-select" name="materi_id" id="materi_id">
                        @foreach ($materis as $materi)
                            @if (old('materi_id') == $materi->id)
                                <option value="{{ $materi->id }}" selected>{{ $materi->judul }}</option>
                            @else
                                <option value="{{ $materi->id }}">{{ $materi->judul }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="jenis_pertanyaan_id" class="form-label">Jenis Pertanyaan</label>
                    <select class="form-select" name="jenis_pertanyaan_id" id="jenis_pertanyaan_id">
                        @foreach ($jenis_pertanyaan as $jenis)
                            @if (old('jenis_pertanyaan_id') == $jenis->id)
                                <option value="{{ $jenis->id }}" selected>{{ $jenis->jenis_pertanyaan }}</option>
                            @else
                                <option value="{{ $jenis->id }}">{{ $jenis->jenis_pertanyaan }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Create Latihan</button>
        </form>
    </div>
@endsection
