@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h4>Edit Komoditas</h4>
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('komoditas.update', $komoditas->id) }}" method="POST">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Komoditas</label>
                    <input type="text" name="nama" class="form-control" value="{{ $komoditas->nama }}" required>
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <input type="text" name="kategori" class="form-control" value="{{ $komoditas->kategori }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Perbarui</button>
                <a href="{{ route('komoditas.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
