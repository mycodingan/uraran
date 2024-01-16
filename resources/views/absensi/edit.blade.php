@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Edit Absensi Kehadiran</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <form action="{{ route('absensi.update', $absensiKehadiran->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_pembayar">Nama Pembayar:</label>
                        <input type="text" name="nama_pembayar" class="form-control" value="{{ $absensiKehadiran->nama_pembayar }}" required>
                    </div>
                    <div class="form-group">
                        <label for="laporan_pembayaran">Laporan Pembayaran:</label>
                        <textarea name="laporan_pembayaran" class="form-control" required>{{ $absensiKehadiran->laporan_pembayaran }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="nominal_pembayaran">Nominal Pembayaran:</label>
                        <input type="number" name="nominal_pembayaran" class="form-control" value="{{ $absensiKehadiran->nominal_pembayaran }}" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_pembayaran">Tanggal Pembayaran:</label>
                        <input type="date" name="tanggal_pembayaran" class="form-control" value="{{ $absensiKehadiran->tanggal_pembayaran }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
