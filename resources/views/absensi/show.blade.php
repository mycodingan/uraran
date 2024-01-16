@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Absensi Kehadiran Details</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nama: {{ $absensiKehadiran->nama_pembayar }}</h5>
                <p class="card-text">Laporan: {{ $absensiKehadiran->laporan_pembayaran }}</p>
                <p class="card-text">Nominal: {{ $absensiKehadiran->nominal_pembayaran }}</p>
                <p class="card-text">Tanggal: {{ $absensiKehadiran->tanggal_pembayaran }}</p>
                <a href="{{ route('absensi.edit', $absensiKehadiran->id) }}" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
@endsection
