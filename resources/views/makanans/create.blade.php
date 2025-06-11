@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Makanan</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('makanans.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Makanan</label>
            <input type="text" name="nama_makanan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Kalori</label>
            <input type="number" name="kalori" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Serving (gram)</label>
            <input type="number" name="serving_gram" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-2">Simpan</button>
    </form>
</div>
@endsection
