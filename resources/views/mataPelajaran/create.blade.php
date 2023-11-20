@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Tambah Mata Pelajaran</h2>
        <form action="{{ route('mata-pelajaran.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="id_jurusan">Pilih Jurusan:</label>
                <select name="id_jurusan" class="form-control" required>
                    @foreach($jurusans as $jurusan)
                        <option value="{{ $jurusan->id }}">{{ $jurusan->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama">Nama Mata Pelajaran:</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Mata Pelajaran:</label>
                <textarea name="deskripsi" class="form-control" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Mata Pelajaran</button>
        </form>
    </div>
@endsection