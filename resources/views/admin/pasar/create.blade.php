@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h4>Tambah Pasar</h4>
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('pasar.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Pasar</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Lokasi</label>
                    <input type="text" name="alamat" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('pasar.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection