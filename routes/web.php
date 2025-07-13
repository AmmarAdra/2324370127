<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BantuanKlienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('beranda');


// Rute untuk halaman statis atau utama
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
})->name('tentang-kami');

Route::get('/email-bisnis', function () {
    return view('email-bisnis');
})->name('email-bisnis');

// Grup untuk semua rute yang berhubungan dengan "Layanan"
Route::prefix('layanan')->name('layanan.')->group(function () {
    Route::get('/pengembangan-web', fn() => view('pengembangan-web'))->name('pengembangan-web');
    Route::get('/maintenance-website', fn() => view('maintenance-website'))->name('maintenance');
    Route::get('/desain-ui-ux', fn() => view('desainui-ux'))->name('desain');
    Route::get('/optimasi-seo', fn() => view('optimasi-seo'))->name('seo');
    Route::get('/infrastruktur-cloud', fn() => view('infrastruktur-cloud'))->name('cloud');
    Route::get('/toko-online', fn() => view('toko-online'))->name('toko-online');
    Route::get('/digital-marketing', fn() => view('digital-marketing'))->name('digital-marketing');
});

// Grup untuk semua rute yang berhubungan dengan "Domain"
Route::prefix('domain')->name('domain.')->group(function () {
    Route::get('/pendaftaran', fn() => view('pendaftaran-domain'))->name('pendaftaran');
    Route::get('/transfer', fn() => view('transfer-domain'))->name('transfer');
});

// Rute untuk halaman kontak
Route::get('/kontak', function () {
    // Anda perlu membuat view 'kontak.blade.php'
    return view('kontak');
})->name('kontak');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

     // Rute untuk menampilkan form pembuatan tiket baru
    Route::get('/bantuan/baru', [BantuanKlienController::class, 'create'])->name('bantuan.create');
    // Rute untuk menyimpan tiket baru dari form
    Route::post('/bantuan', [BantuanKlienController::class, 'store'])->name('bantuan.store');
});

require __DIR__.'/auth.php';