@extends('layout.main')

@section('content')
<h1>Menu Kopi</h1>

@foreach($menu as $m)
    <div class="card">
        <h2>{{ $m->nama_menu }}</h2>
        <p>{{ $m->deskripsi }}</p>
        <strong>Harga: Rp {{ number_format($m->harga) }}</strong>
        <p>Jenis Kopi: {{ $m->jenis->nama_jenis }}</p>
        <p>Barista: {{ $m->barista->nama_barista }}</p>
        @if($m->gambar)
            <br><img src="{{ asset('storage/'.$m->gambar) }}" width="150">
        @endif
    </div>
@endforeach

@endsection
