@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h4>Edit Pasar</h4>
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('pasar.update', $pasar->id) }}" method="POST">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Pasar</label>
                    <input type="text" name="nama" class="form-control" value="{{ $pasar->nama }}" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="{{ $pasar->alamat }}" required>
                </div>
                <div class="mb-3">
                    <label for="kecamatan" class="form-label">Kecamatan</label>
                    <input type="text" name="kecamatan" class="form-control" value="{{ $pasar->kecamatan }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Perbarui</button>
                <a href="{{ route('pasar.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection