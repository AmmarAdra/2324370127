<?php

namespace App\Http\Controllers;

use App\Models\BantuanKlien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BantuanKlienController extends Controller
{
    /**
     * Menampilkan formulir untuk membuat tiket bantuan baru.
     */
    public function create()
    {
        return view('bantuan.create');
    }

    /**
     * Menyimpan tiket bantuan baru ke database.
     */
    public function store(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // 2. Simpan data ke database
        BantuanKlien::create([
            'user_id' => Auth::id(), // Ambil ID user yang sedang login
            'subject' => $request->subject,
            'message' => $request->message,
            'status' => 'Terbuka' // Status default saat tiket dibuat
        ]);

        // 3. Arahkan kembali ke dasbor dengan pesan sukses
        return redirect()->route('dashboard')->with('status', 'Tiket bantuan berhasil dibuat!');
    }
}