@extends('layouts.app')

@section('title', 'Form Pelaporan')

@section('content')
    <h2>Form Pelaporan Banjir</h2>
    <p>Isi data berikut untuk melaporkan kejadian banjir di wilayah Anda.</p>

    <div class="card">
        <form action="{{ route('laporan.store') }}" method="POST">
            @csrf

            <label for="nama_pelapor">Nama Pelapor</label>
            <input type="text" id="nama_pelapor" name="nama_pelapor" value="{{ old('nama_pelapor') }}" placeholder="Contoh: Budi Santoso" required>
            @error('nama_pelapor') <div class="error">{{ $message }}</div> @enderror

            <label for="lokasi">Lokasi Kejadian</label>
            <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi') }}" placeholder="Contoh: Dayeuhkolot, Kab. Bandung" required>
            @error('lokasi') <div class="error">{{ $message }}</div> @enderror

            <label for="tinggi_genangan">Tinggi Genangan Air (cm)</label>
            <input type="number" id="tinggi_genangan" name="tinggi_genangan" value="{{ old('tinggi_genangan') }}" min="0" step="any" placeholder="Contoh: 40" required>
            @error('tinggi_genangan') <div class="error">{{ $message }}</div> @enderror

            <label for="tanggal_kejadian">Tanggal Kejadian</label>
            <input type="date" id="tanggal_kejadian" name="tanggal_kejadian" value="{{ old('tanggal_kejadian', date('Y-m-d')) }}" required>
            @error('tanggal_kejadian') <div class="error">{{ $message }}</div> @enderror

            <button type="submit">Kirim Laporan</button>
        </form>
    </div>
@endsection