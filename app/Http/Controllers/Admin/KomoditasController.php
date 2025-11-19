<?php

namespace App\Http\Controllers\Admin;
use App\Models\Komoditas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KomoditasController extends Controller
{

    public function index()
    {
        $data = Komoditas::latest()->get();
        return view('admin.komoditas.index', compact('data'));
    }

    public function create()
    {
        return view('admin.komoditas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_komoditas' => 'required|string|max:255',
            'satuan_komoditas' => 'nullable|string',
        ]);

        Komoditas::create($request->all());

        return redirect()->route('komoditas.index')->with('success', 'Komoditas created successfully.');
    }

    public function edit(Komoditas $komodita)
    {
        return view('admin.komoditas.edit', ['data' => $komodita]);
    }

    public function update(Request $request, Komoditas $komoditas)
    {
        $request->validate([
            'nama_komoditas' => 'required|string|max:255'. $komoditas->id,
            'satuan_komoditas' => 'nullable|string',
        ]);

        $komoditas->update($request->only('nama_komoditas', 'satuan_komoditas'));

        return redirect()->route('komoditas.index')->with('success', 'Komoditas updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Komoditas $komodita)
    {
        $komodita->delete();
        return back()->with('success', 'Komoditas deleted successfully.');
    }
}
