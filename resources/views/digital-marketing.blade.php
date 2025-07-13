@extends('layouts.master')

@section('title', 'Jasa Digital Marketing & SEO')

@section('body_class', 'domain')

@section('content')

    <section class="section breadcrumb-area  d-flex align-items-center" style="background-image: url({{ asset('assets/img/bg/bg-digital.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="text-white mb-3">Layanan Digital Marketing</h2>
                        <p class="text-white">Tingkatkan visibilitas online, jangkau audiens yang tepat, dan konversikan mereka menjadi pelanggan setia dengan strategi digital marketing yang terukur.</p>
                        <ol class="breadcrumb d-flex justify-content-center mt-3">
                            <li class="breadcrumb-item"><a class="text-uppercase text-white" href="{{ route('beranda') }}">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-uppercase text-white" href="#">Layanan</a></li>
                            <li class="breadcrumb-item text-white active">Digital Marketing</li>
                        </ol>
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
                        <h2 class="text-capitalize">Strategi Lengkap untuk Sukses di Dunia Digital</h2>
                        <p class="d-none d-sm-block mt-4">Kami tidak hanya menjalankan iklan, kami membangun strategi. Dari optimasi mesin pencari (SEO), iklan media sosial, hingga pembuatan konten yang menarik, kami menyediakan solusi lengkap.</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="content-inner">
                        <div class="section-heading mb-3">
                            <h2 class="mb-3">Mengapa Digital Marketing Penting?</h2>
                            <p>Di era digital, kehadiran online yang kuat adalah kunci. Digital marketing memungkinkan Anda untuk:</p>
                        </div>
                        <ul class="content-list">
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4"><i class="fas fa-angle-double-right"></i></div>
                                <div class="content-text media-body"><span>Menjangkau target pasar yang lebih luas dan spesifik.</span></div>
                            </li>
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4"><i class="fas fa-angle-double-right"></i></div>
                                <div class="content-text media-body"><span>Membangun brand awareness dan loyalitas pelanggan.</span></div>
                            </li>
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4"><i class="fas fa-angle-double-right"></i></div>
                                <div class="content-text media-body"><span>Meningkatkan traffic website dan menghasilkan leads berkualitas.</span></div>
                            </li>
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4"><i class="fas fa-angle-double-right"></i></div>
                                <div class="content-text media-body"><span>Mengukur hasil kampanye secara akurat dan real-time.</span></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-5 text-center">
                    <div class="content-thumb pt-5 pt-lg-0">
                        <img src="{{ asset('assets/img/content/content_thumb_4.png') }}" alt="Digital Marketing Importance">
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
                        <h2 class="text-capitalize">Paket Digital Marketing</h2>
                        <p class="d-none d-sm-block mt-4">Pilih paket yang paling sesuai untuk memulai kampanye digital Anda dan mencapai tujuan bisnis.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan">
                        <div class="price-top text-center px-3 px-lg-0">
                            <h3 class="pb-2">SEO Starter</h3>
                            <p>Untuk Visibilitas Awal</p>
                        </div>
                        <div class="price-header text-center my-4 px-3">
                            <div class="plan-cost mt-3"><span class="plan-price">Mulai dari</span></div>
                            <h4 class="plan-tags text-uppercase"><p class="price-text">Rp 2 Juta/bln</p></h4>
                        </div>
                        <ul class="plan-features pb-3">
                            <li>Analisis Kata Kunci (5)</li>
                            <li>Optimasi On-Page</li>
                            <li>Link Building Dasar</li>
                            <li>Laporan Performa Bulanan</li>
                            <li>Konsultasi SEO</li>
                        </ul>
                        <div class="plan-select"><a class="btn btn-bordered text-uppercase" href="#">Pilih Paket</a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan featured">
                        <div class="featured-box bg-indigo text-center p-3"><h3 class="text-white text-uppercase">Populer</h3></div>
                        <div class="price-top text-center px-3 px-lg-0">
                            <h3 class="pb-2">Social Media Pro</h3>
                            <p>Untuk Engagement & Iklan</p>
                        </div>
                        <div class="price-header text-center mt-4 px-3">
                             <div class="plan-cost mt-3"><span class="plan-price">Mulai dari</span></div>
                            <h4 class="plan-tags text-uppercase"><p class="price-text">Rp 4 Juta/bln</p></h4>
                        </div>
                        <ul class="plan-features pb-3">
                            <li>Manajemen 2 Akun Sosmed</li>
                            <li>Pembuatan Konten (12/bulan)</li>
                            <li>Setup & Manajemen Iklan</li>
                            <li>Analisis Audiens</li>
                            <li>Laporan Iklan & Engagement</li>
                        </ul>
                        <div class="plan-select"><a class="btn btn-bordered text-uppercase" href="#">Pilih Paket</a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan">
                        <div class="price-top text-center px-3 px-lg-0">
                            <h3 class="pb-2">All-in-One</h3>
                            <p>Solusi Digital Lengkap</p>
                        </div>
                        <div class="price-header text-center my-4 px-3">
                            <div class="plan-cost mt-3"><span class="plan-price">Harga</span></div>
                            <h4 class="plan-tags text-uppercase"><p class="price-text">Kustom</p></h4>
                        </div>
                        <ul class="plan-features pb-3">
                            <li>Strategi SEO Komprehensif</li>
                            <li>Manajemen Iklan Multi-channel</li>
                            <li>Content Marketing</li>
                            <li>Email Marketing</li>
                            <li>Laporan Terpadu & Konsultasi</li>
                        </ul>
                        <div class="plan-select"><a class="btn btn-bordered text-uppercase" href="#">Hubungi Kami</a></div>
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
                        <h2 class="text-white">Mari Bawa Bisnis Anda ke Level Berikutnya</h2>
                        <p class="text-white d-none d-sm-block mt-4">Setiap bisnis itu unik. Hubungi kami untuk konsultasi gratis dan dapatkan penawaran strategi digital marketing yang dirancang khusus untuk Anda.</p>
                        <a class="btn btn-lg mt-4" href="#">Konsultasi Gratis</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection