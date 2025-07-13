@extends('layouts.master')

@section('title', 'Infrastruktur Cloud Hosting')

@section('body_class', '')

@section('content')

    <section class="section breadcrumb-area  d-flex align-items-center" style="background-image: url({{ asset('assets/img/bg/bg-cloud.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="breadcrumb-content">
                        <h2 class="text-white mb-3">Infrastruktur Cloud yang Andal dan Scalable</h2>
                        <p class="text-white">Dapatkan performa, keamanan, dan fleksibilitas tertinggi untuk aplikasi dan website Anda dengan solusi hosting cloud kami.</p>
                        <ul class="content-list mt-3 mb-2">
                            <li class="single-content-list media text-white py-1">
                                <div class="content-icon pr-4"><i class="fas fa-angle-double-right"></i></div>
                                <div class="content-text media-body"><span><b>GRATIS</b> cPanel & SSL</span></div>
                            </li>
                            <li class="single-content-list media text-white py-1">
                                <div class="content-icon pr-4"><i class="fas fa-angle-double-right"></i></div>
                                <div class="content-text media-body"><span>Traffic <b>Tak Terbatas</b></span></div>
                            </li>
                            <li class="single-content-list media text-white py-1">
                                <div class="content-icon pr-4"><i class="fas fa-angle-double-right"></i></div>
                                <div class="content-text media-body"><span>Instalasi Aplikasi 1-Klik</span></div>
                            </li>
                        </ul>
                        <span class="d-block font-italic text-white">Mulai dari Rp 99.000/bulan*</span>
                        <a href="#pricing" class="btn mt-3">Lihat Paket Cloud</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="features" class="section features-area bg-grey ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Keunggulan Cloud Hosting Kami</h2>
                        <p class="d-none d-sm-block mt-4">Kami merancang infrastruktur cloud untuk memberikan kecepatan, keamanan, dan kemudahan manajemen yang Anda butuhkan.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-features media px-3 py-4">
                        <div class="features-content media-body ml-3">
                            <h3 class="mb-3">Website Super Cepat</h3>
                            <p>Dengan SSD, LiteSpeed, dan caching terintegrasi, website Anda akan dimuat secepat kilat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-features media px-3 py-4">
                        <div class="features-content media-body ml-3">
                            <h3 class="mb-3">Keamanan Terbaik</h3>
                            <p>Dilengkapi Imunify360, proteksi DDoS, dan SSL gratis untuk melindungi data Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-features media px-3 py-4">
                        <div class="features-content media-body ml-3">
                            <h3 class="mb-3">Instalasi 1-Klik</h3>
                            <p>Install WordPress, Joomla, dan 100+ aplikasi lainnya dengan mudah melalui Softaculous.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-features media px-3 py-4">
                        <div class="features-content media-body ml-3">
                            <h3 class="mb-3">Manajemen Mudah</h3>
                            <p>Kelola semua aspek hosting Anda dengan mudah melalui cPanel yang intuitif.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-features media px-3 py-4">
                        <div class="features-content media-body ml-3">
                            <h3 class="mb-3">Manajemen Domain</h3>
                            <p>Dapatkan domain gratis untuk tahun pertama dan kelola semua domain Anda di satu tempat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-features media px-3 py-4">
                        <div class="features-content media-body ml-3">
                            <h3 class="mb-3">Email Profesional</h3>
                            <p>Buat akun email tak terbatas dengan domain Anda sendiri untuk meningkatkan citra bisnis.</p>
                        </div>
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
                        <h2 class="text-capitalize">Paket Cloud Hosting</h2>
                        <p class="d-none d-sm-block mt-4">Tiga pilihan paket untuk mengakomodasi skala proyek Anda, dari blog pribadi hingga aplikasi enterprise.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan">
                        <div class="price-top text-center px-3 px-lg-0">
                            <h3 class="pb-2">Cloud Basic</h3>
                            <p>Untuk proyek awal & personal</p>
                        </div>
                        <div class="price-header text-center my-4 px-3">
                            <div class="plan-cost mt-3"><sup class="plan-sup">Rp</sup><span class="plan-price">99.000</span><span class="plan-type fw-7">/bln</span></div>
                        </div>
                        <ul class="plan-features pb-3">
                            <li>1 Website</li>
                            <li>Penyimpanan 50 GB SSD</li>
                            <li>Traffic Tak Terbatas</li>
                            <li>Gratis Domain & SSL</li>
                            <li>Backup Mingguan</li>
                        </ul>
                        <div class="plan-select"><a class="btn btn-bordered text-uppercase" href="#">Pilih Paket</a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan featured">
                        <div class="featured-box bg-indigo text-center p-3"><h3 class="text-white text-uppercase">Paling Populer</h3></div>
                        <div class="price-top text-center px-3 px-lg-0">
                            <h3 class="pb-2">Cloud Business</h3>
                            <p>Untuk UKM & bisnis berkembang</p>
                        </div>
                        <div class="price-header text-center mt-4 px-3">
                            <div class="plan-cost mt-3"><sup class="plan-sup">Rp</sup><span class="plan-price">199.000</span><span class="plan-type fw-7">/bln</span></div>
                        </div>
                        <ul class="plan-features pb-3">
                            <li>Website Tak Terbatas</li>
                            <li>Penyimpanan 150 GB SSD</li>
                            <li>Traffic Tak Terbatas</li>
                            <li>Gratis Domain & SSL</li>
                            <li>Backup Harian</li>
                        </ul>
                        <div class="plan-select"><a class="btn btn-bordered text-uppercase" href="#">Pilih Paket</a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan">
                        <div class="price-top text-center px-3 px-lg-0">
                            <h3 class="pb-2">Cloud Enterprise</h3>
                            <p>Untuk traffic tinggi & e-commerce</p>
                        </div>
                        <div class="price-header text-center my-4 px-3">
                            <div class="plan-cost mt-3"><sup class="plan-sup">Rp</sup><span class="plan-price">399.000</span><span class="plan-type fw-7">/bln</span></div>
                        </div>
                        <ul class="plan-features pb-3">
                            <li>Website Tak Terbatas</li>
                            <li>Penyimpanan 300 GB SSD</li>
                            <li>Traffic Tak Terbatas</li>
                            <li>Gratis Domain & SSL</li>
                            <li>Backup Harian Prioritas</li>
                        </ul>
                        <div class="plan-select"><a class="btn btn-bordered text-uppercase" href="#">Pilih Paket</a></div>
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
                        <h2 class="text-white">Siap Beralih ke Cloud?</h2>
                        <p class="text-white d-none d-sm-block mt-4">Nikmati kecepatan dan skalabilitas tanpa batas. Tim support ahli kami siap membantu Anda 24/7 untuk proses migrasi yang mulus.</p>
                        <a class="btn btn-lg mt-4" href="#pricing">Mulai Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection