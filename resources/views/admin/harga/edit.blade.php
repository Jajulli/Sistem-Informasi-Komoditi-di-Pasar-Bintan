@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h4>Edit Harga Pangan</h4>
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('harga.update', $harga->id) }}" method="POST">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label for="komoditas_id" class="form-label">Komoditas</label>
                    <select name="komoditas_id" class="form-control" required>
                        @foreach($komoditas as $k)
                            <option value="{{ $k->id }}" {{ $harga->komoditas_id == $k->id ? 'selected' : '' }}>{{ $k->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="pasar_id" class="form-label">Pasar</label>
                    <select name="pasar_id" class="form-control" required>
                        @foreach($pasars as $p)
                            <option value="{{ $p->id }}" {{ $harga->pasar_id == $p->id ? 'selected' : '' }}>{{ $p->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="{{ $harga->tanggal }}" required>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga (Rp)</label>
                    <input type="number" name="harga" class="form-control" value="{{ $harga->harga }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Perbarui</button>
                <a href="{{ route('harga.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
