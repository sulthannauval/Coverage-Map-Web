<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::orderBy("tanggal","desc")->paginate(10);
            

        return view('adminreport', compact('feedbacks'));
    }

    public function show($id)
    {
        // Menampilkan detail log berdasarkan ID
        $feedback = Feedback::findOrFail($id); // Cari log berdasarkan ID
            
        return view('adminreportshow', compact('feedback')); // Tampilkan detail log
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'email' => 'required|string',
            'telepon' => 'required|string',
            'komentar' => 'required|string',
        ]);

        // Simpan ke database, tanpa pembaruan_terakhir (diisi otomatis oleh MySQL)
        Feedback::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'komentar' => $request->komentar,
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Terima Kasih atas feedbacknya Anda!');
    }

}
