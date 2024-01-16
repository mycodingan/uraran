@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Create Iuran</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('iurans.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_pengeluh">Nama Pengeluh:</label>
                <input type="text" name="nama_pengeluh" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="judul_keluhan">Judul Keluhan:</label>
                <input type="text" name="judul_keluhan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="isi_keluhan">Isi Keluhan:</label>
                <textarea name="isi_keluhan" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="jumlah_iuran">Jumlah Iuran:</label>
                <input type="number" name="jumlah_iuran" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Iuran</button>
        </form>
\        <a href="{{ route('iurans.index') }}" class="btn btn-secondary mt-3">Back to Iuran List</a>
    </div>
@endsection
