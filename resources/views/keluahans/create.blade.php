@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Create Keluahan</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('keluahans.store') }}" method="POST">
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
            <button type="submit" class="btn btn-primary">Create Keluahan</button>
        </form>
        <a href="{{ route('keluahans.index') }}" class="btn btn-secondary mt-3">Back to Keluahan List</a>
    </div>
@endsection
