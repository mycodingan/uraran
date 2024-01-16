@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Iuran Details</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $iuran->nama_pengeluh }}</h5>
                <p class="card-text">Judul Keluhan: {{ $iuran->judul_keluhan }}</p>
                <p class="card-text">Isi Keluhan: {{ $iuran->isi_keluhan }}</p>
                <p class="card-text">Jumlah Iuran: {{ $iuran->jumlah_iuran }}</p>
            </div>
        </div>
        <a href="{{ route('iurans.index') }}" class="btn btn-primary mt-3">Back to Iuran List</a>
    </div>
@endsection
