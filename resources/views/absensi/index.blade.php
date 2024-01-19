@extends('layout.app')

@section('content')
    <div class="container mt-3" style="width: 100%">
        <h2>Absensi Kehadiran List</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            @foreach($absensiKehadirans as $absensiKehadiran)
                <div class="col-md-4 mb-4 ml-28">
                    <div class="card ml-32" >
                        <div class="card-body" style="">
                            <h5 class="card-title">Nama: {{ $absensiKehadiran->nama_pembayar }}</h5>
                            <p class="card-text">Laporan: {{ $absensiKehadiran->laporan_pembayaran }}</p>
                            <p class="card-text">Nominal: {{ $absensiKehadiran->nominal_pembayaran }}</p>
                            <p class="card-text">Tanggal: {{ $absensiKehadiran->tanggal_pembayaran }}</p>
                            <a href="{{ route('absensi.show', $absensiKehadiran->id) }}" class="btn btn-info">Show Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <form action="{{ route('absensi.showByDate') }}" method="GET" class="form-inline mt-3">
            <label for="date" class="mr-2">Filter by Date:</label>
            <input type="date" name="date" class="form-control">
            <button type="submit" class="btn btn-secondary ml-2">Filter</button>
        </form>
        <a href="{{ route('absensi.pdf') }}" class="btn btn-info mt-3">Generate PDF</a>
    </div>
@endsection
