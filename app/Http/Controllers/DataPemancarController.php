<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPemancar;

class DataPemancarController extends Controller
{
    public function index()
    {
        $pemancars = DataPemancar::paginate(25);
        return view('admin', compact('pemancars'));
    }

    public function create()
    {
        return view('adminadd');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pemancar' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        // Simpan ke database, tanpa pembaruan_terakhir (diisi otomatis oleh MySQL)
        DataPemancar::create([
            'nama_pemancar' => $request->nama_pemancar,
            'provinsi' => $request->provinsi,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Data pemancar berhasil ditambahkan.');
    }

    public function show($id)
    {
        $pemancar = DataPemancar::findOrFail($id);
        return view('pemancar.show', compact('pemancar'));
    }

    public function edit($id)
    {
        $pemancar = DataPemancar::findOrFail($id);
        return view('adminediting', compact('pemancar'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pemancar' => 'required',
            'provinsi' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'pembaruan_terakhir' => 'required|date',
        ]);

        $pemancar = DataPemancar::findOrFail($id);
        $pemancar->update($request->all());

        return redirect()->route('admin')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pemancar = DataPemancar::findOrFail($id);
        $pemancar->delete();

        return redirect()->route('admin')->with('success', 'Data berhasil dihapus.');
    }
}
