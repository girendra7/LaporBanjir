<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    // Form Input Pelaporan
    public function create()
    {
        return view('laporan.create');
    }

    // Menyimpan Data dari Form ke Database (Poin d)
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelapor' => 'required',
            'lokasi' => 'required',
            'tinggi_genangan' => 'required|numeric',
            'tanggal_kejadian' => 'required|date',
        ]);

        Laporan::create([
            'nama_pelapor' => $request->nama_pelapor,
            'lokasi' => $request->lokasi,
            'tinggi_genangan' => $request->tinggi_genangan,
            'tanggal_kejadian' => $request->tanggal_kejadian,
        ]);

        return redirect()->route('laporan.konfirmasi');
    }

    // Halaman Konfirmasi
    public function konfirmasi()
    {
        return view('laporan.konfirmasi');
    }

    // Menampilkan Semua Data dari Database 
    public function index()
    {
        $laporan = Laporan::all();
        return view('laporan.index', compact('laporan'));
    }
}  