@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')
    <h2>Daftar Laporan Banjir</h2>
    <p>Total laporan: {{ count($laporan) }}</p>

    @forelse($laporan as $item)
        @include('partials.laporan-card', ['item' => $item])
    @empty
        <p>Belum ada laporan banjir.</p>
    @endforelse
@endsection
