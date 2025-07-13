@extends('layouts.master')

@section('title', 'Transfer Domain')

@section('body_class', 'domain')

@section('content')

    <section class="section breadcrumb-area  d-flex align-items-center" style="background-image: url({{ asset('assets/img/bg/bg-transfer.jpg') }})">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="domain-content section-heading text-center mb-0">
                        <h2 class="text-white">Transfer Domain Anda ke Sini</h2>
                        <p class="text-white my-3">Kelola semua domain Anda di satu tempat yang aman dan mudah. Masukkan nama domain yang ingin Anda transfer.</p>
                        <div class="domain-form m-auto">
                            <input type="text" class="form-control" placeholder="Ketik nama domain yang akan ditransfer...">
                            <button type="submit" class="btn btn-bordered"><i class="fas fa-search mr-2"></i>Transfer</button>
                        </div>
                        <span class="text-white d-block mt-5">Ingin mencari nama domain baru? <a class="service-btn text-white" href="{{ route('domain.pendaftaran') }}">Coba Pencarian Domain</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section promo-area promo-1 ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-7">
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Mengapa Transfer Domain ke Kami?</h2>
                        <p class="d-none d-sm-block mt-4">Nikmati kemudahan, keamanan, dan harga yang kompetitif dengan memusatkan semua aset digital Anda di satu platform.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 res-margin">
                    <div class="single-promo text-center p-3">
                        <i class="pe-7s-timer pe-5x"></i>
                        <h3 class="my-3">Kontrol Panel Intuitif</h3>
                        <p>Kelola DNS, perpanjangan, dan pengaturan domain lainnya dengan mudah melalui kontrol panel kami yang ramah pengguna.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 res-margin">
                    <div class="single-promo text-center p-3">
                        <i class="pe-7s-chat pe-5x"></i>
                        <h3 class="my-3">Dukungan Ahli 24/7</h3>
                        <p>Tim support kami siap membantu Anda 24/7 untuk memastikan proses transfer domain berjalan lancar tanpa kendala.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-promo text-center p-3">
                        <i class="pe-7s-cash pe-5x"></i>
                        <h3 class="my-3">Harga Kompetitif</h3>
                        <p>Dapatkan harga perpanjangan domain yang transparan dan kompetitif, tanpa biaya tersembunyi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="service" class="section service-area bg-indigo ptb_100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="section-heading mb-3">
                        <h2 class="text-white mb-3">Transfer Domain dalam 4 Langkah Mudah</h2>
                        <p class="text-white">Proses transfer domain kami rancang agar sederhana dan cepat. Cukup ikuti langkah-langkah di bawah ini.</p>
                    </div>
                    <a href="#transfer-domain" class="btn btn-lg mt-4">Mulai Transfer Sekarang</a>
                </div>
                <div class="col-12 col-md-6">
                    <ul class="content-list text-left pt-4 pt-md-0">
                        <li class="single-content-list media py-3">
                            <div class="content-icon pt-2 pr-4"><i class="fas fa-angle-double-right text-white"></i></div>
                            <div class="content-text media-body">
                                <h3 class="text-white mb-2">1. Masukkan Nama Domain</h3>
                                <p class="text-white">Ketik nama domain yang ingin Anda transfer pada kolom pencarian di atas.</p>
                            </div>
                        </li>
                        <li class="single-content-list media py-3">
                            <div class="content-icon pt-2 pr-4"><i class="fas fa-angle-double-right text-white"></i></div>
                            <div class="content-text media-body">
                                <h3 class="text-white mb-2">2. Lanjutkan Pembayaran</h3>
                                <p class="text-white">Selesaikan proses checkout. Biaya transfer biasanya sudah termasuk perpanjangan 1 tahun.</p>
                            </div>
                        </li>
                        <li class="single-content-list media py-3">
                            <div class="content-icon pt-2 pr-4"><i class="fas fa-angle-double-right text-white"></i></div>
                            <div class="content-text media-body">
                                <h3 class="text-white mb-2">3. Masukkan Kode EPP</h3>
                                <p class="text-white">Dapatkan kode otorisasi (EPP Code) dari registrar lama Anda dan masukkan pada halaman transfer kami.</p>
                            </div>
                        </li>
                        <li class="single-content-list media py-3">
                            <div class="content-icon pt-2 pr-4"><i class="fas fa-angle-double-right text-white"></i></div>
                            <div class="content-text media-body">
                                <h3 class="text-white mb-2">4. Konfirmasi Email</h3>
                                <p class="text-white">Anda akan menerima email verifikasi. Klik link konfirmasi untuk menyetujui proses transfer.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section content-area ptb_100">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="content-inner">
                        <div class="section-heading mb-3">
                            <h2>Checklist Sebelum Transfer</h2>
                            <p>Untuk memastikan proses transfer domain Anda berjalan mulus tanpa hambatan, pastikan hal-hal berikut ini:</p>
                        </div>
                        <ul class="content-list">
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4"><i class="fas fa-check"></i></div>
                                <div class="content-text media-body"><span>Domain sudah berusia lebih dari 60 hari sejak didaftarkan atau ditransfer terakhir.</span></div>
                            </li>
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4"><i class="fas fa-check"></i></div>
                                <div class="content-text media-body"><span>Status domain tidak terkunci (`unlocked` atau `OK`) di registrar lama.</span></div>
                            </li>
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4"><i class="fas fa-check"></i></div>
                                <div class="content-text media-body"><span>Anda memiliki akses ke Kode EPP (Authorization Code) dari registrar lama.</span></div>
                            </li>
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4"><i class="fas fa-check"></i></div>
                                <div class="content-text media-body"><span>Fitur Whois Privacy Protection telah dinonaktifkan sementara selama proses transfer.</span></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-6 text-center">
                    <div class="content-thumb pt-5 pt-lg-0">
                        <img src="{{ asset('assets/img/content/content_thumb.png') }}" alt="Checklist">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section cta-area bg-indigo ptb_100">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-8">
                    <div class="section-heading text-center m-0">
                        <h2 class="text-white">Siap Memindahkan Domain Anda?</h2>
                        <p class="text-white d-none d-sm-block mt-4">Nikmati kemudahan dan keamanan mengelola semua aset digital Anda di satu tempat. Tim kami siap membantu jika Anda mengalami kesulitan.</p>
                        <a class="btn btn-lg mt-4" href="#transfer-domain">Mulai Transfer Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection