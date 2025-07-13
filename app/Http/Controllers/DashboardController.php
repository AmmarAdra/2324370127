<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dasbor klien.
     */
    public function index(): View
    {
        // 1. Ambil pengguna yang sedang login
        $user = Auth::user();

        // 2. Ambil semua proyek milik pengguna tersebut
        // 'with('service')' untuk mengambil data layanan terkait secara efisien
       $projects = $user->projects()->with(['service', 'invoices'])->latest()->get();

        // 3. Kirim data proyek ke view 'dashboard'
        return view('dashboard', [
            'projects' => $projects,
        ]);
    }
}