<?php

namespace App\Http\Controllers;

use App\Jurusan;
use App\MataPelajaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jurusans = Jurusan::all();
        $mataPelajaran = MataPelajaran::all();

        return view('dashboard', [
            'mataPelajaran' => $mataPelajaran,
            'jurusans' => $jurusans,
            'totalJurusan' => $jurusans->count(),  // Menghitung total jurusan
            'totalMataPelajaran' => $mataPelajaran->count(),  // Menghitung total mata pelajaran
        ]);
    }
}
