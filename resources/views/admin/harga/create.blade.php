@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h4>Tambah Harga Pangan</h4>
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('harga.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="komoditas_id" class="form-label">Komoditas</label>
                    <select name="komoditas_id" class="form-control" required>
                        <option value="">-- Pilih Komoditas --</option>
                        @foreach($komoditas as $k)
                            <option value="{{ $k->id }}">{{ $k->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="pasar_id" class="form-label">Pasar</label>
                    <select name="pasar_id" class="form-control" required>
                        <option value="">-- Pilih Pasar --</option>
                        @foreach($pasar as $p)
                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga (Rp)</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('harga.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection