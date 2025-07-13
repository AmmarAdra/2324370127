@extends('layouts.master')

@section('title', 'Jasa Pengembangan Website Profesional')

@section('body_class', '')

@section('content')

   <section class="section breadcrumb-area   d-flex align-items-center" style="background-image: url({{ asset('assets/img/bg/bg-webbb.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="text-white mb-3">Jasa Pengembangan Website Profesional</h2>
                        <p class="text-white">Wujudkan ide Anda menjadi website yang fungsional, menarik, dan dioptimalkan untuk pertumbuhan bisnis Anda di dunia digital.</p>
                        <ol class="breadcrumb d-flex justify-content-center mt-3">
                            <li class="breadcrumb-item"><a class="text-uppercase text-white" href="{{ route('beranda') }}">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-uppercase text-white" href="#">Layanan</a></li>
                            <li class="breadcrumb-item text-white active">Pengembangan Website</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="pricing" class="section inner-price-plan price-plan-area ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Paket Pembuatan Website</h2>
                        <p class="d-none d-sm-block mt-4">Kami menyediakan beberapa pilihan paket yang dirancang untuk memenuhi kebutuhan beragam jenis bisnis.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan">
                        <div class="price-top text-center px-3 px-lg-0">
                            <h3 class="pb-2">Starter</h3>
                            <p>Untuk Company Profile & Portofolio</p>
                        </div>
                        <div class="price-header text-center my-4 px-3">
                            <div class="plan-cost mt-3"><span class="plan-price">Mulai</span></div>
                            <h4 class="plan-tags text-uppercase"><p class="price-text">Rp 5 Juta</p></h4>
                        </div>
                        <ul class="plan-features pb-3">
                            <li>Desain Kustom (5 Halaman)</li>
                            <li>Desain Responsif</li>
                            <li>Fitur Kontak & Peta</li>
                            <li>Basic SEO Setup</li>
                            <li>Training CMS</li>
                        </ul>
                        <div class="plan-select"><a class="btn btn-bordered text-uppercase" href="#">Pilih Paket</a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan featured">
                        <div class="featured-box bg-indigo text-center p-3"><h3 class="text-white text-uppercase">Best Value</h3></div>
                        <div class="price-top text-center px-3 px-lg-0">
                             <h3 class="pb-2">Business</h3>
                            <p>Untuk Kebutuhan Bisnis & Fitur Kustom</p>
                        </div>
                        <div class="price-header text-center mt-4 px-3">
                             <div class="plan-cost mt-3"><span class="plan-price">Mulai</span></div>
                            <h4 class="plan-tags text-uppercase"><p class="price-text">Rp 12 Juta</p></h4>
                        </div>
                        <ul class="plan-features pb-3">
                            <li>Desain Kustom (10+ Halaman)</li>
                            <li>Fitur Kustom (mis. Booking)</li>
                            <li>Integrasi Pihak Ketiga</li>
                            <li>Advanced SEO Setup</li>
                            <li>Dukungan Prioritas</li>
                        </ul>
                        <div class="plan-select"><a class="btn btn-bordered text-uppercase" href="#">Pilih Paket</a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan">
                        <div class="price-top text-center px-3 px-lg-0">
                            <h3 class="pb-2">E-Commerce</h3>
                            <p>Solusi Lengkap untuk Toko Online</p>
                        </div>
                         <div class="price-header text-center my-4 px-3">
                            <div class="plan-cost mt-3">Harga</div>
                            <h4 class="plan-tags text-uppercase"><p class="price-text">Kustom</p></h4>
                        </div>
                        <ul class="plan-features pb-3">
                            <li>Desain Toko Online Eksklusif</li>
                            <li>Manajemen Produk & Stok</li>
                            <li>Integrasi Payment Gateway</li>
                            <li>Sistem Manajemen Pesanan</li>
                            <li>Fitur Marketing & Kupon</li>
                        </ul>
                        <div class="plan-select"><a class="btn btn-bordered text-uppercase" href="#">Hubungi Kami</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="service" class="section service-area bg-grey ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-9">
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Fitur Standar di Setiap Proyek</h2>
                        <p class="d-none d-sm-block mt-4">Setiap website yang kami bangun selalu dilengkapi dengan fitur-fitur penting untuk menjamin kualitas terbaik.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service p-4">
                        <h3 class="my-3">Desain Responsif</h3>
                        <p>Tampilan sempurna di semua perangkat, mulai dari desktop, tablet, hingga smartphone.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service p-4">
                        <h3 class="my-3">Cepat & Optimal</h3>
                        <p>Kami mengoptimalkan setiap aspek untuk memastikan website Anda dimuat dengan cepat.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service p-4">
                        <h3 class="my-3">SEO-Friendly</h3>
                        <p>Struktur website dibangun sesuai kaidah SEO untuk kemudahan terindeks oleh Google.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service p-4">
                        <h3 class="my-3">Mudah Dikelola (CMS)</h3>
                        <p>Anda dapat dengan mudah mengubah dan menambah konten sendiri melalui halaman admin.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service p-4">
                        <h3 class="my-3">Keamanan Terjamin</h3>
                        <p>Implementasi SSL dan praktik pengkodean yang aman untuk melindungi website Anda.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service p-4">
                        <h3 class="my-3">Dukungan Purna Jual</h3>
                        <p>Kami menyediakan garansi dan dukungan teknis setelah website Anda diluncurkan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="review" class="section review-area ptb_100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="section-heading mb-3">
                        <h2 class="mb-3">Dipercaya oleh Klien dari Berbagai Industri</h2>
                        <p>Portofolio kami mencakup berbagai jenis bisnis, dari startup, UKM, hingga perusahaan besar. Kami bangga menjadi bagian dari kesuksesan digital mereka.</p>
                    </div>
                    <a href="#" class="btn btn-lg mt-4">Lihat Portofolio</a>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="client-reviews owl-carousel pt-5 pt-lg-0">
                        <div class="single-review">
                            <div class="review-content">
                                <div class="review-text">
                                    <p class="font-italic">"Website baru kami luar biasa! Prosesnya cepat dan timnya sangat profesional. Traffic kami meningkat pesat setelah peluncuran."</p>
                                </div>
                                <div class="quot-icon"><img class="avatar-sm" src="{{ asset(path: 'assets/img/quote.png') }}" alt=""></div>
                            </div>
                            <div class="reviewer media mt-3">
                                <div class="reviewer-thumb"><img class="avatar-lg radius-100" src="{{ asset('assets/img/avatar/avatar-1.png') }}" alt=""></div>
                                <div class="reviewer-meta media-body align-self-center ml-4">
                                    <h5 class="reviewer-name color-primary mb-2">Budi Santoso</h5>
                                    <h6 class="text-secondary fw-6">CEO, Maju Jaya Group</h6>
                                </div>
                            </div>
                        </div>
                        <div class="single-review">
                             <div class="review-content">
                                <div class="review-text">
                                    <p class="font-italic">"Komunikasinya sangat mudah dan hasilnya melebihi ekspektasi. Mereka benar-benar mengerti apa yang kami butuhkan untuk toko online kami."</p>
                                </div>
                                <div class="quot-icon"><img class="avatar-sm" src="{{ asset('assets/img/quote.png') }}" alt=""></div>
                            </div>
                            <div class="reviewer media mt-3">
                                <div class="reviewer-thumb"><img class="avatar-lg radius-100" src="{{ asset('assets/img/avatar/avatar-2.png') }}" alt=""></div>
                                <div class="reviewer-meta media-body align-self-center ml-4">
                                    <h5 class="reviewer-name color-primary mb-2">Rina Wati</h5>
                                    <h6 class="text-secondary fw-6">Founder, Cantik Store</h6>
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
                        <h2 class="text-white">Mulai Proyek Website Anda Hari Ini</h2>
                        <p class="text-white d-none d-sm-block mt-4">Diskusikan kebutuhan Anda dengan tim kami dan dapatkan penawaran yang sesuai dengan anggaran dan tujuan bisnis Anda.</p>
                        <a class="btn btn-lg mt-4" href="#">Konsultasi Gratis</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection