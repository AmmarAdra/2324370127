@extends('layouts.master')

@section('title', 'Email Bisnis Profesional')

@section('body_class', 'domain')

@section('content')

    <section class="section breadcrumb-area  d-flex align-items-center" style="background-image: url({{ asset('assets/img/bg/bg-contact.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="text-white mb-3">Email Bisnis Profesional & Aman</h2>
                        <p class="text-white">Tingkatkan kredibilitas brand Anda dengan alamat email khusus (nama@bisnisanda.com). Cepat, andal, dan bebas iklan.</p>
                        <span class="d-block font-italic text-white">Mulai dari Rp 25.000/bulan*</span>
                        <a href="#pricing" class="btn mt-3">Lihat Paket</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section promo-area promo-2 no-hover overflow-hidden ptb_100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-5">
                    <h2 class="mb-2">Mulai dalam 3 Langkah Mudah</h2>
                    <p>Dapatkan email profesional untuk bisnis Anda dengan cepat dan tanpa ribet.</p>
                    <a class="btn btn-lg mt-3" href="#pricing">Pilih Paket Sekarang</a>
                </div>
                <div class="col-12 col-md-7">
                    <div class="row align-items-center pt-4 pt-lg-0">
                        <div class="col-12 col-md-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="single-promo text-center">
                                        <div class="promo-content mt-3">
                                            <h3 class="mb-2">1. Pilih Paket Email</h3>
                                            <p>Pilih paket yang sesuai dengan kebutuhan penyimpanan dan jumlah akun yang Anda perlukan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single-promo text-center">
                                        <div class="promo-content mt-3">
                                            <h3 class="mb-2">2. Hubungkan Domain</h3>
                                            <p>Gunakan nama domain yang sudah Anda miliki untuk membuat alamat email yang profesional.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="single-promo text-center">
                                        <div class="promo-content mt-3">
                                            <h3 class="mb-2">3. Siap Digunakan</h3>
                                            <p>Setelah setup singkat, Anda bisa langsung mengirim dan menerima email dari mana saja.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <section id="pricing" class="section inner-price-plan price-plan-area bg-grey ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-7">
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Paket Email Hosting</h2>
                        <p class="d-none d-sm-block mt-4">Solusi email yang aman dan andal untuk menunjang komunikasi bisnis Anda.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="single-price-plan">
                                <div class="price-top text-center px-3 px-lg-0">
                                    <h3 class="pb-2">Business Email</h3>
                                </div>
                                <div class="price-header text-center my-4 px-3">
                                    <div class="plan-cost mt-3">
                                        <sup class="plan-sup">Rp</sup>
                                        <span class="plan-price">25.000</span>
                                        <span class="plan-type fw-7">/akun/bln</span>
                                    </div>
                                </div>
                                <ul class="plan-features pb-3">
                                    <li>Penyimpanan 10 GB per Akun</li>
                                    <li>Antivirus & Anti-Spam</li>
                                    <li>Akses Webmail & Mobile</li>
                                    <li>Kalender & Kontak Terintegrasi</li>
                                    <li>Garansi Uptime 99.9%</li>
                                </ul>
                                <div class="plan-select">
                                    <a class="btn btn-bordered text-uppercase" href="#">Pilih Paket</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="single-price-plan featured">
                                <div class="featured-box bg-indigo text-center p-3">
                                    <h3 class="text-white text-uppercase">Paling Populer</h3>
                                </div>
                                <div class="price-top text-center px-3 px-lg-0">
                                    <h3 class="pb-2">Enterprise Email</h3>
                                </div>
                                <div class="price-header text-center mt-4 px-3">
                                    <div class="plan-cost mt-3">
                                        <sup class="plan-sup">Rp</sup>
                                        <span class="plan-price">45.000</span>
                                        <span class="plan-type fw-7">/akun/bln</span>
                                    </div>
                                </div>
                                <ul class="plan-features pb-3">
                                    <li>Penyimpanan 30 GB per Akun</li>
                                    <li>Antivirus & Anti-Spam Premium</li>
                                    <li>Akses Webmail & Mobile</li>
                                    <li>Kalender, Kontak & Tugas</li>
                                    <li>Keamanan Tingkat Lanjut</li>
                                </ul>
                                <div class="plan-select">
                                    <a class="btn btn-bordered text-uppercase" href="#">Pilih Paket</a>
                                </div>
                            </div>
                        </div>
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
                        <h2 class="text-capitalize">Fitur Unggulan Email Bisnis</h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="content-inner">
                        <div class="section-heading mb-3">
                            <h2 class="mb-3">Akses di Mana Saja</h2>
                            <p>Sinkronkan email, kalender, dan kontak Anda di semua perangkat—mulai dari desktop, laptop, hingga smartphone—sehingga Anda tidak akan pernah melewatkan pesan penting.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 text-center">
                    <div class="content-thumb pt-5 pt-lg-0">
                        <img src="{{ asset('assets/img/content/content_thumb_2.png') }}" alt="Multi-device Access">
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
                        <h2 class="text-white">Tinggalkan Email Gratis, Beralih ke Profesional Sekarang!</h2>
                        <p class="text-white d-none d-sm-block mt-4">Bangun kepercayaan dan citra profesional untuk bisnis Anda dengan email yang menggunakan nama domain Anda sendiri.</p>
                        <a class="btn btn-lg mt-4" href="#pricing">Lihat Semua Paket</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection