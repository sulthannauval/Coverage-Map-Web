<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email',
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Simpan ke database, tanpa pembaruan_terakhir (diisi otomatis oleh MySQL)
        Admin::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Tambah Akun Berhasil!');
    }
}
