@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white shadow rounded-lg p-6">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-semibold text-gray-700">Dashboard Admin</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-blue-100 rounded-lg shadow p-5">
                <h3 class="text-lg font-bold text-blue-700 mb-2">Komoditas</h3>
                <p class="text-sm text-blue-600 mb-4">Lihat dan kelola daftar komoditas pangan.</p>
                <a href="/admin/komoditas" class="inline-block bg-blue-700 text-white px-4 py-2 text-sm rounded hover:bg-blue-800">Kelola Komoditas</a>
            </div>

            <div class="bg-green-100 rounded-lg shadow p-5">
                <h3 class="text-lg font-bold text-green-700 mb-2">Pasar</h3>
                <p class="text-sm text-green-600 mb-4">Kelola informasi dan lokasi pasar.</p>
                <a href="/admin/pasar" class="inline-block bg-green-700 text-white px-4 py-2 text-sm rounded hover:bg-green-800">Kelola Pasar</a>
            </div>

            <div class="bg-yellow-100 rounded-lg shadow p-5">
                <h3 class="text-lg font-bold text-yellow-700 mb-2">Harga Pangan</h3>
                <p class="text-sm text-yellow-600 mb-4">Input dan kelola data harga pangan harian.</p>
                <a href="/admin/harga/" class="inline-block bg-yellow-600 text-white px-4 py-2 text-sm rounded hover:bg-yellow-700">Kelola Harga</a>
            </div>
        </div>

        <div class="mt-8 border-t pt-4 text-gray-500 text-sm">
            Akses menu di atas untuk mengelola data sesuai kebutuhan.
        </div>
    </div>
</div>
@endsection
