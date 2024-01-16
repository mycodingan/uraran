@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Edit Keluahan</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('keluahans.update', $keluhan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_pengeluh">Nama Pengeluh:</label>
                <input type="text" name="nama_pengeluh" class="form-control" value="{{ $keluhan->nama_pengeluh }}" required>
            </div>
            <div class="form-group">
                <label for="judul_keluhan">Judul Keluhan:</label>
                <input type="text" name="judul_keluhan" class="form-control" value="{{ $keluhan->judul_keluhan }}" required>
            </div>
            <div class="form-group">
                <label for="isi_keluhan">Isi Keluhan:</label>
                <textarea name="isi_keluhan" class="form-control" required>{{ $keluhan->isi_keluhan }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Keluahan</button>
        </form>
        <a href="{{ route('keluahans.index') }}" class="btn btn-secondary mt-3">Back to Keluahan List</a>
    </div>
@endsection
