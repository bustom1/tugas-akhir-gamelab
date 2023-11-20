<?php

namespace App\Http\Controllers;

use App\Jurusan;
use App\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mataPelajarans = MataPelajaran::all();
        return view('mataPelajaran.index', ['mata_pelajarans' => $mataPelajarans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusans = Jurusan::all();
        return view('mata_pelajaran.create', ['jurusans' => $jurusans]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_jurusan' => 'required|exists:jurusans,id',
            'nama' => 'required|max:200',
            'deskripsi' => 'required',
        ]);

        MataPelajaran::create([
            'id_jurusan' => $request->id_jurusan,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('index-mata-pelajaran')->with('success', 'Mata Pelajaran berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MataPelajaran  $mataPelajaran
     * @return \Illuminate\Http\Response
     */
    public function show(MataPelajaran $mataPelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MataPelajaran  $mataPelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit(MataPelajaran $mataPelajaran)
    {
        $mata_pelajaran = MataPelajaran::findOrFail($mataPelajaran);
        $jurusans = Jurusan::all();
        return view('mata_pelajaran.edit', ['mata_pelajaran' => $mata_pelajaran, 'jurusans' => $jurusans]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MataPelajaran  $mataPelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MataPelajaran $mataPelajaran)
    {
        $mata_pelajaran = MataPelajaran::findOrFail($mataPelajaran);

    // Validasi data di sini

    $mata_pelajaran->update([
        'id_jurusan' => $request->id_jurusan,
        'nama' => $request->nama,
        'deskripsi' => $request->deskripsi,
    ]);

    return redirect()->route('mata-pelajaran.index')->with('success', 'Mata Pelajaran berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MataPelajaran  $mataPelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(MataPelajaran $mataPelajaran)
    {
        $mata_pelajaran = MataPelajaran::findOrFail($mataPelajaran);
        $mata_pelajaran->delete();
    
        return redirect()->route('mata-pelajaran.index')->with('success', 'Mata Pelajaran berhasil dihapus!');
    }
}
