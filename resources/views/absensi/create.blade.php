@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Create Absensi Kehadiran</h2>
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
                <form action="{{ route('absensi.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_pembayar">Nama Pembayar:</label>
                        <input type="text" name="nama_pembayar" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="laporan_pembayaran">Laporan Pembayaran:</label>
                        <textarea name="laporan_pembayaran" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nominal_pembayaran">Nominal Pembayaran:</label>
                        <input type="number" name="nominal_pembayaran" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_pembayaran">Tanggal Pembayaran:</label>
                        <input type="date" name="tanggal_pembayaran" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
