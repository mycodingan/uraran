@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Keluahan List</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div> <a href="{{ route('keluahans.create') }}" class="btn btn-secondary mt-3">tambahkan keluahan</a>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Pengeluh</th>
                    <th>Judul Keluhan</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($keluahans as $keluhan)
                    <tr>
                        <td>{{ $keluhan->nama_pengeluh }}</td>
                        <td>{{ $keluhan->judul_keluhan }}</td>
                        <td>
                            <a href="{{ route('keluahans.show', $keluhan->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('keluahans.edit', $keluhan->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('keluahans.destroy', $keluhan->id) }}" method="POST"
                                style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('keluahans.pdf') }}" class="btn btn-primary">Generate PDF</a>
    </div>
@endsection
