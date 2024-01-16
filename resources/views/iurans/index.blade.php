@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Iuran List</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            @foreach($iurans as $iuran)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $iuran->nama_pengeluh }}</h5>
                            <p class="card-text">Jumlah Iuran: {{ $iuran->jumlah_iuran }}</p>
                            <a href="{{ route('iurans.show', $iuran->id) }}" class="btn btn-info">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-3">
            <h5>Total Iuran Amount: {{ $totalIuran }}</h5>
        </div>
        <div class="mt-3">
            <a href="{{ route('iurans.create') }}" class="btn btn-primary">Add New Iuran</a>
        </div>
    </div>
@endsection
