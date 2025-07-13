@extends('layouts.master')

@section('title', 'Jasa Pembuatan Toko Online (E-Commerce)')

@section('body_class', '')

@section('content')

    <section class="section breadcrumb-area  d-flex align-items-center" style="background-image: url({{ asset('assets/img/bg/bg-toko.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="breadcrumb-content">
                        <h2 class="text-white">Solusi E-Commerce untuk Toko Online Anda</h2>
                        <ul class="content-list mt-3 mb-2">
                            <li class="single-content-list media text-white py-1">
                                <div class="content-icon pr-4"><i class="fas fa-angle-double-right"></i></div>
                                <div class="content-text media-body"><span>Desain Profesional & Responsif</span></div>
                            </li>
                            <li class="single-content-list media text-white py-1">
                                <div class="content-icon pr-4"><i class="fas fa-angle-double-right"></i></div>
                                <div class="content-text media-body"><span>Gateway Pembayaran Aman</span></div>
                            </li>
                            <li class="single-content-list media text-white py-1">
                                <div class="content-icon pr-4"><i class="fas fa-angle-double-right"></i></div>
                                <div class="content-text media-body"><span>Manajemen Produk & Pesanan Mudah</span></div>
                            </li>
                        </ul>
                        <span class="d-block font-italic text-white">Mulai dari Rp 7 Jutaan</span>
                        <a href="#pricing" class="btn btn-lg mt-3">Lihat Paket</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="pricing" class="section inner-price-plan price-plan-area bg-grey ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Paket Pembuatan Toko Online</h2>
                        <p class="d-none d-sm-block mt-4">Pilih solusi e-commerce yang paling sesuai dengan skala bisnis dan jumlah produk yang Anda miliki.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan">
                        <div class="price-top text-center px-3 px-lg-0">
                            <h3 class="pb-2">UKM Starter</h3>
                            <p>Untuk memulai bisnis online Anda</p>
                        </div>
                        <div class="price-header text-center my-4 px-3">
                            <div class="plan-cost mt-3"><span class="plan-price">Mulai</span></div>
                            <h4 class="plan-tags text-uppercase"><p class="price-text">Rp 7 Juta</p></h4>
                        </div>
                        <ul class="plan-features pb-3">
                            <li>Desain dari Template Premium</li>
                            <li>Upload hingga 100 Produk</li>
                            <li>Integrasi Bank Transfer & E-Wallet</li>
                            <li>Integrasi Kurir Dasar</li>
                            <li>Halaman Admin yang Mudah</li>
                        </ul>
                        <div class="plan-select"><a class="btn btn-bordered text-uppercase" href="#">Pilih Paket</a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan featured">
                        <div class="featured-box bg-indigo text-center p-3"><h3 class="text-white text-uppercase">Paling Laris</h3></div>
                        <div class="price-top text-center px-3 px-lg-0">
                            <h3 class="pb-2">Business Pro</h3>
                            <p>Untuk bisnis yang sedang bertumbuh</p>
                        </div>
                        <div class="price-header text-center mt-4 px-3">
                            <div class="plan-cost mt-3"><span class="plan-price">Mulai</span></div>
                            <h4 class="plan-tags text-uppercase"><p class="price-text">Rp 15 Juta</p></h4>
                        </div>
                        <ul class="plan-features pb-3">
                            <li>Desain Kustom Eksklusif</li>
                            <li>Upload Produk Tanpa Batas</li>
                            <li>Semua Payment Gateway</li>
                            <li>Integrasi Kurir Lanjutan</li>
                            <li>Fitur Diskon & Kupon</li>
                            <li>Optimasi SEO E-Commerce</li>
                        </ul>
                        <div class="plan-select"><a class="btn btn-bordered text-uppercase" href="#">Pilih Paket</a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan">
                        <div class="price-top text-center px-3 px-lg-0">
                            <h3 class="pb-2">Enterprise</h3>
                            <p>Untuk skala besar & fitur kustom</p>
                        </div>
                        <div class="price-header text-center my-4 px-3">
                            <div class="plan-cost mt-3"><span class="plan-price">Harga</span></div>
                            <h4 class="plan-tags text-uppercase"><p class="price-text">Kustom</p></h4>
                        </div>
                        <ul class="plan-features pb-3">
                            <li>Semua di Paket Business Pro</li>
                            <li>Fitur Multi-vendor/Marketplace</li>
                            <li>Integrasi API ke Sistem Internal</li>
                            <li>Performa & Keamanan Tertinggi</li>
                            <li>Dukungan Penuh & SLA</li>
                        </ul>
                        <div class="plan-select"><a class="btn btn-bordered text-uppercase" href="#">Hubungi Kami</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section content-area ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-9">
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Mengapa Memilih Solusi E-Commerce Kami?</h2>
                        <p class="d-none d-sm-block mt-4">Kami membangun toko online yang tidak hanya berfungsi baik, tetapi juga memberikan pengalaman belanja terbaik bagi pelanggan Anda.</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="content-inner">
                        <div class="section-heading mb-3">
                            <h2 class="mb-3">Desain yang Menjual</h2>
                            <p>Tampilan pertama sangat menentukan. Kami merancang antarmuka yang menarik, mudah dinavigasi, dan dioptimalkan untuk konversi, memastikan calon pembeli Anda menjadi pelanggan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 text-center">
                    <div class="content-thumb pt-5 pt-lg-0">
                        <img src="{{ asset('assets/img/content/content_thumb.png') }}" alt="E-commerce Design">
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center ptb_100">
                <div class="col-12 col-lg-5 order-2 order-lg-1">
                    <div class="content-thumb text-center pt-5 pt-lg-0">
                        <img src="{{ asset('assets/img/content/content_thumb_2.png') }}" alt="E-commerce Features">
                    </div>
                </div>
                <div class="col-12 col-lg-6 order-1 order-lg-2">
                    <div class="content-inner">
                        <div class="section-heading mb-3">
                            <h2 class="mb-3">Fitur Lengkap untuk Berjualan</h2>
                            <p>Kelola produk, lacak inventaris, proses pesanan, dan terima pembayaran dengan mudah melalui satu dasbor admin yang intuitif. Kami mengintegrasikan semua yang Anda butuhkan untuk sukses.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section faq-area bg-grey ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-9">
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Pertanyaan Umum (FAQ)</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="faq-content">
                        <div class="accordion" id="sApp-accordion">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10 col-lg-9">
                                    <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                        <div class="card-header bg-inherit border-0 p-0">
                                            <h2 class="mb-0"><button class="btn px-0 py-3" type="button" data-toggle="collapse" data-target="#collapseOne">Platform apa yang digunakan?</button></h2>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#sApp-accordion">
                                            <div class="card-body px-0 py-3">Kami utamanya menggunakan WooCommerce (berbasis WordPress) karena fleksibilitas dan kemudahan pengelolaannya. Namun, kami juga dapat membangun dengan platform lain seperti Shopify atau custom dengan Laravel sesuai kebutuhan proyek.</div>
                                        </div>
                                    </div>
                                    <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                        <div class="card-header bg-inherit border-0 p-0">
                                            <h2 class="mb-0"><button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseTwo">Apakah saya bisa mengelola toko online ini sendiri?</button></h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#sApp-accordion">
                                            <div class="card-body px-0 py-3">Tentu saja. Setiap toko online yang kami buat dilengkapi dengan halaman admin (CMS) yang mudah digunakan. Kami akan memberikan training agar Anda bisa mengelola produk, pesanan, dan konten lainnya secara mandiri.</div>
                                        </div>
                                    </div>
                                    <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                        <div class="card-header bg-inherit border-0 p-0">
                                            <h2 class="mb-0"><button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseThree">Apakah sudah termasuk integrasi pembayaran?</button></h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#sApp-accordion">
                                            <div class="card-body px-0 py-3">Ya, paket kami sudah termasuk integrasi dengan berbagai metode pembayaran populer di Indonesia, seperti transfer bank, virtual account, kartu kredit, dan e-wallet (GoPay, OVO, dll).</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <h2 class="text-white">Siap Memulai Bisnis Online Anda?</h2>
                        <p class="text-white d-none d-sm-block mt-4">Wujudkan toko online impian Anda bersama kami. Diskusikan kebutuhan Anda dan dapatkan solusi e-commerce terbaik yang dirancang khusus untuk bisnis Anda.</p>
                        <a class="btn btn-lg mt-4" href="#">Mulai Proyek Toko Online</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection