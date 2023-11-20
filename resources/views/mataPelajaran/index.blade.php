@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3 pt-3">
            <h2>Daftar Mata Pelajaran</h2>
            <a href="{{ route('mata-pelajaran.create') }}" class="btn btn-success">Tambah Data</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Mata Pelajaran</th>
                    <th>Deskripsi</th>
                    <th>Jurusan</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mata_pelajarans as $mata_pelajaran)
                    <tr>
                        <td>{{ $mata_pelajaran->id }}</td>
                        <td>{{ $mata_pelajaran->nama }}</td>
                        <td>{{ $mata_pelajaran->deskripsi }}</td>
                        <td>{{ $mata_pelajaran->jurusan->nama }}</td>
                        <td>
                            <a href="{{ route('mata-pelajaran.edit', $mata_pelajaran->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('mata-pelajaran.destroy', $mata_pelajaran->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection