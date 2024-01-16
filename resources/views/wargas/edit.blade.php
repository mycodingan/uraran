@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Edit Warga</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('wargas.update', $warga->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="foto_ktp">Photo KTP:</label>
                <img src="{{ Storage::url($warga->foto_ktp) }}" class="img-thumbnail mb-2" alt="KTP Photo">
                <input type="file" name="foto_ktp" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama_warga">Nama Warga:</label>
                <input type="text" name="nama_warga" class="form-control" value="{{ $warga->nama_warga }}">
            </div>
            <div class="form-group">
                <label for="nomor_kk">Nomor KK:</label>
                <input type="text" name="nomor_kk" class="form-control" value="{{ $warga->nomor_kk }}">
            </div>
            <div class="form-group">
                <label for="jumlah_keluarga">Jumlah Keluarga:</label>
                <input type="number" name="jumlah_keluarga" class="form-control" value="{{ $warga->jumlah_keluarga }}">
            </div>
            <div class="form-group">
                <label for="alamat_rumah">Alamat Rumah:</label>
                <textarea name="alamat_rumah" class="form-control">{{ $warga->alamat_rumah }}</textarea>
            </div>
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan:</label>
                <input type="text" name="pekerjaan" class="form-control" value="{{ $warga->pekerjaan }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Warga</button>
        </form>
        <a href="{{ route('wargas.index') }}" class="btn btn-secondary mt-3">Back to Warga List</a>
    </div>
@endsection
