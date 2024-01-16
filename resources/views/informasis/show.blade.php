@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Informasi Details</h2>
        <div class="card">
            <img src="{{ Storage::url($informasi->gambar_informasi) }}" class="card-img-top" alt="Informasi Image">
            <div class="card-body">
                <h5 class="card-title">{{ $informasi->judul_informasi }}</h5>
                <p class="card-text">Pengirim: {{ $informasi->nama_pengirim }}</p>
                <p class="card-text">Isi Informasi: {{ $informasi->isi_informasi }}</p>
            </div>
        </div>
        <a href="{{ route('informasis.index') }}" class="btn btn-primary mt-3">Back to Informasi List</a>
    </div>
@endsection
