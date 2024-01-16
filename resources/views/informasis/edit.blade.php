@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <h2>Edit Informasi</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('informasis.update', $informasi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_pengirim">Nama Pengirim:</label>
                <input type="text" name="nama_pengirim" class="form-control" value="{{ $informasi->nama_pengirim }}" required>
            </div>
            <div class="form-group">
                <label for="gambar_informasi">Gambar Informasi:</label>
                <input type="file" name="gambar_informasi" class="form-control">
                <img src="{{ Storage::url($informasi->gambar_informasi) }}" alt="Current Image" class="mt-2" style="max-width: 200px;">
            </div>
            <div class="form-group">
                <label for="judul_informasi">Judul Informasi:</label>
                <input type="text" name="judul_informasi" class="form-control" value="{{ $informasi->judul_informasi }}" required>
            </div>
            <div class="form-group">
                <label for="isi_informasi">Isi Informasi:</label>
                <textarea name="isi_informasi" class="form-control" required>{{ $informasi->isi_informasi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Informasi</button>
        </form>
        <a href="{{ route('informasis.index') }}" class="btn btn-secondary mt-3">Back to Informasi List</a>
    </div>
@endsection
