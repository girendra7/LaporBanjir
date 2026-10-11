<div class="card">
    <h3>{{ $item['lokasi'] }}</h3>
    <p><strong>Pelapor:</strong> {{ $item['nama'] }}</p>
    <p><strong>Tinggi Genangan:</strong> {{ $item['tinggi'] }} cm</p>
    <p><strong>Waktu Lapor:</strong> {{ $item['tanggal'] }}</p>

    @if($item['tinggi'] < 30)
        <p>Status: <span class="badge badge-waspada">Waspada</span></p>
    @elseif($item['tinggi'] <= 70)
        <p>Status: <span class="badge badge-siaga">Siaga</span></p>
    @else
        <p>Status: <span class="badge badge-awas">Awas</span></p>
    @endif
</div>