<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;
use Illuminate\Support\Facades\Auth;
use App\Models\Log;
use App\Models\UploadKMZ;

class KMZController extends Controller
{
    public function view()
    {
        return view('admineditupload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:kmz,zip',
            'description' => 'required|string',
        ]);

        $file = $request->file('file');

        // Buat nama file "prediksi-DDMMYY"
        $dateString = date('dmY');
        $baseName = "prediksi-{$dateString}";
        $kmzFileName = $baseName . '.kmz';

        // Simpan file kmz ke storage sementara (storage/app/uploads)
        $tempPath = $file->storeAs('uploads', $kmzFileName);

        $storagePath = storage_path('app/' . $tempPath);
        $publicExtractPath = public_path("kml/{$baseName}");

        // Rename file kmz menjadi zip (ganti ekstensi)
        $zipFilePath = storage_path("app/uploads/{$baseName}.zip");
        if (!rename($storagePath, $zipFilePath)) {
            return back()->withErrors(['file' => 'Gagal mengganti ekstensi file menjadi .zip']);
        }

        // Buat folder ekstrak di public/kml/prediksi-DDMMYY
        if (!file_exists($publicExtractPath)) {
            mkdir($publicExtractPath, 0755, true);
        }

        // Ekstrak zip ke folder public/kml/prediksi-DDMMYY
        $zip = new ZipArchive;
        if ($zip->open($zipFilePath) === TRUE) {
            $zip->extractTo($publicExtractPath);
            $zip->close();
        } else {
            return back()->withErrors(['file' => 'Gagal mengekstrak file KMZ.']);
        }

        // Hapus file zip setelah ekstrak
        unlink($zipFilePath);

        // Simpan path relatif ke database (misal: 'kml/prediksi-DDMMYY')
        $relativePath = "kml/{$baseName}";

        // Simpan ke tabel upload_kmz, kolom path dan description
        $kmz = UploadKMZ::create([
            'nama_file' => $baseName,
            'path_file' => $relativePath,
            'id_admin' => Auth::guard('admin')->id(), // id admin yang sedang login
        ]);

        // Simpan informasi deskripsi atau data lain jika perlu
        // Contoh: Simpan ke database

        // Simpan log
        Log::create([
            'id_upload' => $kmz->id_upload,
            'id_admin' => Auth::guard('admin')->id(), // id admin yang sedang login
            'id_aksi' => 3,
            'deskripsi_aksi' => $request->description,
        ]);

        return back()->with('success', 'File berhasil diupload dan diekstrak.');
    }
}
