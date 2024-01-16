@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Warga Details</h2>

        <!-- Display warga details in a card -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $warga->nama_warga }}</h5>
                <p class="card-text">Number KK: {{ $warga->nomor_kk }}</p>
                <p class="card-text">Jumlah Keluarga: {{ $warga->jumlah_keluarga }}</p>
                <p class="card-text">Alamat Rumah: {{ $warga->alamat_rumah }}</p>
                <p class="card-text">Pekerjaan: {{ $warga->pekerjaan }}</p>
                <img src="{{ Storage::url($warga->foto_ktp) }}" class="card-img-top" alt="KTP Photo">
            </div>
        </div>

        <!-- Back button -->
        <a href="{{ route('wargas.index') }}" class="btn btn-primary mt-3">Back to Warga List</a>
    </div>
@endsection
