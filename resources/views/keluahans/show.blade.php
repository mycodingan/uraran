@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <h2>Keluahan Details</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $keluhan->nama_pengeluh }}</h5>
                <p class="card-text">Judul Keluhan: {{ $keluhan->judul_keluhan }}</p>
                <p class="card-text">Isi Keluhan: {{ $keluhan->isi_keluhan }}</p>
            </div>
        </div>
        <a href="{{ route('keluahans.index') }}" class="btn btn-primary mt-3">Back to Keluahan List</a>
    </div>
@endsection
