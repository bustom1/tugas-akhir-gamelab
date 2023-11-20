@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Edit Mata Pelajaran</h2>
        <form action="{{ route('mata-pelajaran.update', $mata_pelajaran[0]->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_jurusan">Pilih Jurusan:</label>
                <select name="id_jurusan" class="form-control" required>
                    @foreach($jurusans as $jurusan)
                        <option value="{{ $jurusan->id }}" {{ $mata_pelajaran[0]->id_jurusan == $jurusan->id ? 'selected' : '' }}>
                            {{ $jurusan->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama">Nama Mata Pelajaran:</label>
                <input type="text" name="nama" class="form-control" value="{{ $mata_pelajaran[0]->nama }}" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Mata Pelajaran:</label>
                <textarea name="deskripsi" class="form-control" rows="3" required>{{ $mata_pelajaran[0]->deskripsi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Mata Pelajaran</button>
        </form>
    </div>
@endsection