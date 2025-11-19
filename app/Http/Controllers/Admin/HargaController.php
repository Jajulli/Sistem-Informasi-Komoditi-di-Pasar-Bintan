<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pasar;
use App\Models\HargaPangan;
use App\Models\Komoditas;

class HargaController extends Controller
{
    public function index()
    {
        $data = HargaPangan::with(['komoditas', 'pasar'])->orderBy('tanggal', 'desc')->get();   
        return view('admin.harga.index', compact('data'));
    }

   public function create()
    {
        $komoditas = Komoditas::all();
        $pasar = Pasar::all();
        return view('admin.harga.create', compact('komoditas', 'pasar'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'komoditas_id' => 'required|exists:komoditas,id',
            'pasar_id' => 'required|exists:pasar,id',
            'tanggal' => 'required|date',
            'harga' => 'required|integer',
        ]);

        HargaPangan::create($request->all());

        return redirect()->route('harga.index')->with('success', 'Harga Pangan created successfully.');
    }

    public function edit(HargaPangan $harga)
    {
        $komoditas = Komoditas::all();
        $pasar = Pasar::all();
        return view('admin.harga.edit', compact('harga', 'komoditas', 'pasar'));    
    }

    public function update(Request $request, HargaPangan $harga)
    {
        $request->validate([
            'komoditas_id' => 'required|exists:komoditas,id',
            'pasar_id' => 'required|exists:pasar,id',
            'tanggal' => 'required|date',
            'harga' => 'required|integer',
        ]);

        $harga->update($request->all());

        return redirect()->route('harga.index')->with('success', 'Harga Pangan updated successfully.');
    }

    public function destroy(HargaPangan $harga)
    {
        $harga->delete();

        return back()->with('success', 'Harga Pangan deleted successfully.');
    }
}
