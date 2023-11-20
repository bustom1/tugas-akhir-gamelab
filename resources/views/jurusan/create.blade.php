@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Tambah Jurusan</h2>
        <form action="{{ route('jurusan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Jurusan:</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Jurusan:</label>
                <textarea name="deskripsi" class="form-control" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Jurusan</button>
        </form>
    </div>
@endsection