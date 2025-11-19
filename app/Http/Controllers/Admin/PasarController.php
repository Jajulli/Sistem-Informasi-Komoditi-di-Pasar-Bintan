<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pasar;
use Illuminate\Http\Request;

class PasarController extends Controller
{
    public function index()
    {
        $data = Pasar::latest()->get();
        return view('admin.pasar.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pasar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pasar' => 'required|string|max:255',
            'alamat_pasar' => 'nullable|string',
        ]);

        Pasar::create($request->all());

        return redirect()->route('pasar.index')->with('success', 'Pasar created successfully.');
    }

    public function edit(Pasar $pasar)
    {
        return view('admin.pasar.edit', ['data' => $pasar]);  
    }

    public function update(Request $request, Pasar $pasar)
    {
        $request->validate([
            'nama_pasar' => 'required|string|max:255' . $pasar->id,
            'alamat_pasar' => 'nullable|string',
        ]);

        $pasar->update($request->only('nama_pasar', 'alamat_pasar'));

        return redirect()->route('pasar.index')->with('success', 'Pasar updated successfully.');
    }

    public function destroy(Pasar $pasar)
    {
        $pasar->delete();
        return back()->with('success', 'Pasar deleted successfully.');
    }
}
