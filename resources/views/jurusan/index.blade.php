@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3 pt-3">
            <h2>Daftar Jurusan</h2>
            <a href="{{ route('jurusan.create') }}" class="btn btn-success">Tambah Data</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Jurusan</th>
                    <th>Deskripsi</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                $counter = 1;    
                @endphp
                @foreach ($jurusans as $jurusan)
                    <tr>
                        <td>{{ $counter++ }}</td>
                        <td>{{ $jurusan->nama }}</td>
                        <td>{{ $jurusan->deskripsi }}</td>
                        <td>
                            <a href="{{ route('jurusan.edit', $jurusan->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('jurusan.destroy', $jurusan->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
