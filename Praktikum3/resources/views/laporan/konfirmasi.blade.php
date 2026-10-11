@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
    <div class="card" style="text-align: center; padding: 30px 20px;">
        <h2 style="color: #16a34a; margin-top: 0;">Laporan Berhasil Terkirim!</h2>
        <p>Terima kasih, data laporan banjir Anda telah berhasil disimpan ke database BPBD.</p>

        <div style="margin-top: 20px;">
            <a href="{{ route('laporan.index') }}" class="btn-link">Lihat Daftar Laporan</a>
            <a href="{{ route('laporan.create') }}" class="btn-link" style="background: #475569;">Kirim Laporan Lagi</a>
        </div>
    </div>
@endsection