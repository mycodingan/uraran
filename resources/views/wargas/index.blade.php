@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Warga List</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('wargas.search') }}" method="GET">
            <div class="input-group mb-3">
                <input type="text" name="search" class="form-control" placeholder="Search by name">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>

        <!-- Warga list -->
        <div class="row">
            @foreach($wargas as $warga)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ Storage::url($warga->foto_ktp) }}" class="card-img-top" alt="KTP Photo">
                        <div class="card-body">
                            <h5 class="card-title">{{ $warga->nama_warga }}</h5>
                            <p class="card-text">Number KK: {{ $warga->nomor_kk }}</p>
                            <a href="{{ route('wargas.show', $warga->id) }}" class="btn btn-info">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination links -->
        {{ $wargas->links() }}
    </div>
@endsection
