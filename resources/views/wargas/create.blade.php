@extends('layout.app')

@section('content')
    <h2>Create Warga</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('wargas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="foto_ktp">Photo KTP:</label>
            <input type="file" name="foto_ktp" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama_warga">Nama Warga:</label>
            <input type="text" name="nama_warga" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nomor_kk">Nomor KK:</label>
            <input type="text" name="nomor_kk" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jumlah_keluarga">Jumlah Keluarga:</label>
            <input type="number" name="jumlah_keluarga" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="alamat_rumah">Alamat Rumah:</label>
            <textarea name="alamat_rumah" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="pekerjaan">Pekerjaan:</label>
            <input type="text" name="pekerjaan" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Warga</button>
    </form>
@endsection
