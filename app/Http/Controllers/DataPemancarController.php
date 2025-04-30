<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPemancar;
use App\Models\Log;
use Illuminate\Support\Facades\Auth;

class DataPemancarController extends Controller
{
    public function index()
    {
        $pemancars = DataPemancar::paginate(25);
        return view('admin', compact('pemancars'));
    }

    public function indexEdit()
    {
        $pemancars = DataPemancar::paginate(25);
        return view('adminedit', compact('pemancars'));
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
        $pemancar = DataPemancar::findOrFail($id);
        $pemancar->nama_pemancar = $request->input('nama_pemancar');
        $pemancar->longitude = $request->input('longitude');
        $pemancar->latitude = $request->input('latitude');
        $pemancar->provinsi = $request->input('provinsi');
        $pemancar->save();

        // Simpan log
        Log::create([
            'id_pemancar' => $pemancar->id,
            'id_admin' => Auth::guard('admin')->id(), // id admin yang sedang login
            'id_aksi' => 2,
            'deskripsi_aksi' => $request->detail,
            'id_upload' => null
        ]);

        return redirect('/admin')->with('success', 'Data updated successfully!');
    }

    public function destroy($id)
    {
        $pemancar = DataPemancar::findOrFail($id);
        $pemancar->delete();

        Log::create([
            'id_pemancar' => $pemancar->id,
            'id_admin' => Auth::guard('admin')->id(), // id admin yang sedang login
            'id_aksi' => 5,
            'deskripsi_aksi' => 'Menghapus Data Pemancar ' . $pemancar->nama_pemancar,
            'id_upload' => null
        ]);

        return redirect()->route('admin')->with('success', 'Data berhasil dihapus.');
    }
}
