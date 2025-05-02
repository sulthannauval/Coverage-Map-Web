<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DataPemancar;
use App\Models\Log;
use Illuminate\Support\Facades\Auth;

class DataPemancarController extends Controller
{
    public function index()
    {
        $pemancars = DataPemancar::paginate(10);
        return view('admin', compact('pemancars'));
    }

    public function indexEdit()
    {
        $pemancars = DataPemancar::paginate(10);
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
        $pemancar = DataPemancar::create([
            'nama_pemancar' => $request->nama_pemancar,
            'provinsi' => $request->provinsi,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        // Simpan log
        Log::create([
            'id_pemancar' => $pemancar->id_pemancar,
            'id_admin' => Auth::guard('admin')->id(), // id admin yang sedang login
            'id_aksi' => 1,
            'deskripsi_aksi' => $request->detail,
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
            'id_pemancar' => $pemancar->id_pemancar,
            'id_admin' => Auth::guard('admin')->id(), // id admin yang sedang login
            'id_aksi' => 2,
            'deskripsi_aksi' => $request->detail,
        ]);

        return redirect('/admin')->with('success', 'Data updated successfully!');
    }

    public function destroy($id)
    {
        $pemancar = DataPemancar::findOrFail($id);
        $pemancar->delete();

        Log::create([
            'id_pemancar' => $pemancar->id_pemancar,
            'id_admin' => Auth::guard('admin')->id(), // id admin yang sedang login
            'id_aksi' => 5,
            'deskripsi_aksi' => 'Menghapus Data Pemancar ' . $pemancar->nama_pemancar,
            'id_upload' => null
        ]);

        return redirect()->route('admin')->with('success', 'Data berhasil dihapus.');
    }

    public function exportCsv()
    {
        $pemancars = DB::table('data_pemancar')->get();

        $filename = "data_pemancar.csv";

        $headers = [
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$filename",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        ];

        $columns = ['No.', 'Nama Pemancar', 'Provinsi', 'Latitude', 'Longitude'];

        $callback = function () use ($pemancars, $columns) {
            $file = fopen('php://output', 'w');

            // Tulis header kolom dengan pemisah titik koma
            fputcsv($file, $columns, ';', "\0");

            // Tulis data baris
            foreach ($pemancars as $pemancar) {
                // Buat array data sesuai urutan kolom
                $row = [
                    $pemancar->id_pemancar,
                    $pemancar->nama_pemancar,
                    $pemancar->provinsi,
                    $pemancar->latitude,
                    $pemancar->longitude
                ];
                // Gunakan fputcsv dengan delimiter ';' dan enclosure kosong agar tidak ada tanda "
                fputcsv($file, $row, ';', "\0");
            }

            fclose($file);
        };

        Log::create([
            'id_admin' => Auth::guard('admin')->id(), // id admin yang sedang login
            'id_aksi' => 4,
            'deskripsi_aksi' => 'Mengunduh Data Pemancar Pada ' . now()->format('Y-m-d H:i:s'),
        ]);

        return response()->stream($callback, 200, $headers);
    }

    public function liveSearch(Request $request)
    {
        $query = $request->input('query');

        $pemancars = DataPemancar::when($query, function ($q) use ($query) {
            $q->where('nama_pemancar', 'like', "%{$query}%")
                ->orWhere('provinsi', 'like', "%{$query}%");
        })->paginate(10);

        // Kembalikan data dan link pagination
        return response()->json([
            'data' => $pemancars->items(),
            'links' => (string) $pemancars->withQueryString()->links(),
            'current_page' => $pemancars->currentPage(),
            'per_page' => $pemancars->perPage(),
        ]);
        
    }
}
