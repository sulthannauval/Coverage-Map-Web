<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class LogController extends Controller
{
    // Method untuk menampilkan seluruh log
    public function index()
    {
        // Mengambil semua data log
        $logs = Log::with(['admin', 'aksi', 'pemancar', 'upload']) // Load relasi jika diperlukan
            ->orderBy('tanggal', 'desc')
            ->paginate(10); // Paginate log jika datanya banyak

        return view('adminhistory', compact('logs')); // Tampilkan view log dengan data logs
    }

    // Method untuk menampilkan log berdasarkan ID
    public function show($id)
    {
        // Menampilkan detail log berdasarkan ID
        $log = Log::with(['admin', 'aksi', 'pemancar', 'upload']) // Load relasi jika diperlukan
            ->findOrFail($id); // Cari log berdasarkan ID

        return view('adminhistoryshow', compact('log')); // Tampilkan detail log
    }
}
