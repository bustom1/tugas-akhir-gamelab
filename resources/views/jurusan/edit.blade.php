@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Edit Jurusan</h2>
        <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama Jurusan:</label>
                <input type="text" name="nama" class="form-control" value="{{ $jurusan->nama }}" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Jurusan:</label>
                <textarea name="deskripsi" class="form-control" rows="3" required>{{ $jurusan->deskripsi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Jurusan</button>
        </form>
    </div>
@endsection