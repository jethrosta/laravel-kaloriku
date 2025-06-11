@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Makanan</h2>
    <a href="{{ route('makanans.create') }}" class="btn btn-primary mb-3">Tambah Makanan</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Makanan</th>
                <th>Kalori</th>
                <th>Serving (gram)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($makanans as $makanan)
                <tr>
                    <td>{{ $makanan->nama_makanan }}</td>
                    <td>{{ $makanan->kalori }}</td>
                    <td>{{ $makanan->serving_gram }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
