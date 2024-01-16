@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Informasi List</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            @foreach($informasis as $informasi)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ Storage::url($informasi->gambar_informasi) }}" class="card-img-top" alt="Informasi Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $informasi->nama_pengirim }}</h5>
                            <p class="card-text">{{ $informasi->judul_informasi }}</p>
                            <a href="{{ route('informasis.show', $informasi->id) }}" class="btn btn-info">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-3">
            <a href="{{ route('informasis.create') }}" class="btn btn-primary">Add New Informasi</a>
        </div>
    </div>
@endsection
