@extends('layouts.master')

@section('title', 'Jasa Maintenance Website Profesional')

@section('body_class', '')

@section('content')

    <section class="section breadcrumb-area  d-flex align-items-center" style="background-image: url({{ asset('assets/img/bg/bg-tokoo.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="text-white mb-3">Layanan Maintenance Website</h2>
                        <p class="text-white">Fokus pada bisnis Anda, biarkan kami yang menjaga website Anda tetap aman, cepat, dan selalu terbarui secara profesional.</p>
                        <ol class="breadcrumb d-flex justify-content-center mt-3">
                            <li class="breadcrumb-item"><a class="text-uppercase text-white" href="{{ route('beranda') }}">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-uppercase text-white" href="#">Layanan</a></li>
                            <li class="breadcrumb-item text-white active">Maintenance Website</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section features-area bg-grey ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Mengapa Website Anda Perlu Maintenance?</h2>
                        <p class="d-none d-sm-block mt-4">Sama seperti kendaraan, website memerlukan perawatan rutin untuk memastikan performa, keamanan, dan fungsionalitasnya tetap optimal.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <nav>
                    <div class="nav nav-tabs mb-5" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active text-uppercase fw-6 border-0" data-toggle="tab" href="#rutin">Layanan Rutin</a>
                        <a class="nav-item nav-link text-uppercase fw-6 border-0" data-toggle="tab" href="#keamanan">Keamanan & Performa</a>
                        <a class="nav-item nav-link text-uppercase fw-6 border-0" data-toggle="tab" href="#dukungan">Dukungan Prioritas</a>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 p-0">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="rutin" role="tabpanel">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4 res-margin">
                                    <div class="single-promo media p-3">
                                        <i class="pe-7s-refresh-2 pe-4x"></i>
                                        <div class="promo-content media-body ml-3">
                                            <h3 class="mb-2">Pembaruan Rutin</h3>
                                            <p>Kami memperbarui core, plugin, dan tema website Anda untuk menjaga kompatibilitas dan menutup celah keamanan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 res-margin">
                                    <div class="single-promo media p-3">
                                        <i class="pe-7s-safe pe-4x"></i>
                                        <div class="promo-content media-body ml-3">
                                            <h3 class="mb-2">Backup Berkala</h3>
                                            <p>Backup data website Anda secara rutin (harian/mingguan) untuk restorasi cepat jika terjadi masalah.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-promo media p-3">
                                        <i class="pe-7s-signal pe-4x"></i>
                                        <div class="promo-content media-body ml-3">
                                            <h3 class="mb-2">Monitoring Uptime</h3>
                                            <p>Kami memonitor website Anda 24/7 dan akan segera bertindak jika website Anda tidak dapat diakses.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="keamanan" role="tabpanel">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4 res-margin">
                                    <div class="single-promo media p-3">
                                        <i class="pe-7s-shield pe-4x"></i>
                                        <div class="promo-content media-body ml-3">
                                            <h3 class="mb-2">Pemindaian Malware</h3>
                                            <p>Melakukan pemindaian keamanan secara berkala untuk mendeteksi dan membersihkan malware atau virus.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 res-margin">
                                    <div class="single-promo media p-3">
                                        <i class="pe-7s-rocket pe-4x"></i>
                                        <div class="promo-content media-body ml-3">
                                            <h3 class="mb-2">Optimasi Kecepatan</h3>
                                            <p>Membersihkan database, mengoptimalkan gambar, dan fine-tuning untuk menjaga kecepatan loading website.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-promo media p-3">
                                        <i class="pe-7s-news-paper pe-4x"></i>
                                        <div class="promo-content media-body ml-3">
                                            <h3 class="mb-2">Laporan Bulanan</h3>
                                            <p>Anda akan menerima laporan detail tentang semua aktivitas maintenance, status keamanan, dan performa website.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="tab-pane fade" id="dukungan" role="tabpanel">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4 res-margin">
                                    <div class="single-promo media p-3">
                                        <i class="pe-7s-help1 pe-4x"></i>
                                        <div class="promo-content media-body ml-3">
                                            <h3 class="mb-2">Dukungan Teknis</h3>
                                            <p>Akses ke tim ahli kami untuk membantu mengatasi masalah teknis yang mungkin Anda hadapi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 res-margin">
                                    <div class="single-promo media p-3">
                                        <i class="pe-7s-close-circle pe-4x"></i>
                                        <div class="promo-content media-body ml-3">
                                            <h3 class="mb-2">Penanganan Error</h3>
                                            <p>Respons cepat untuk memperbaiki error atau bug yang muncul setelah pembaruan atau perubahan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-promo media p-3">
                                        <i class="pe-7s-chat pe-4x"></i>
                                        <div class="promo-content media-body ml-3">
                                            <h3 class="mb-2">Konsultasi</h3>
                                            <p>Dapatkan saran dari tim kami untuk perbaikan kecil atau peningkatan fitur pada website Anda.</p>
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
    <section id="pricing" class="section inner-price-plan price-plan-area ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-7">
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Paket Maintenance Website</h2>
                        <p class="d-none d-sm-block mt-4">Kami menawarkan paket fleksibel yang disesuaikan dengan kebutuhan dan skala website Anda.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan">
                        <div class="price-top text-center px-3 px-lg-0">
                            <h3 class="pb-2">Basic</h3>
                            <p>Untuk Blog & Web Personal</p>
                        </div>
                        <div class="price-header text-center my-4 px-3">
                            <div class="plan-cost mt-3"><sup class="plan-sup">Rp</sup><span class="plan-price">350.000</span><span class="plan-type fw-7">/bln</span></div>
                        </div>
                        <ul class="plan-features pb-3">
                            <li>Update Plugin & Tema Bulanan</li>
                            <li>Backup Mingguan</li>
                            <li>Monitoring Uptime</li>
                            <li>Laporan Bulanan</li>
                        </ul>
                        <div class="plan-select"><a class="btn btn-bordered text-uppercase" href="#">Pilih Paket</a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan featured">
                        <div class="featured-box bg-indigo text-center p-3"><h3 class="text-white text-uppercase">Paling Populer</h3></div>
                        <div class="price-top text-center px-3 px-lg-0">
                             <h3 class="pb-2">Business</h3>
                            <p>Untuk Website UKM & Company Profile</p>
                        </div>
                        <div class="price-header text-center mt-4 px-3">
                            <div class="plan-cost mt-3"><sup class="plan-sup">Rp</sup><span class="plan-price">750.000</span><span class="plan-type fw-7">/bln</span></div>
                        </div>
                        <ul class="plan-features pb-3">
                            <li>Semua di Paket Basic</li>
                            <li>Update Mingguan</li>
                            <li>Pemindaian Keamanan Bulanan</li>
                            <li>Optimasi Kecepatan</li>
                            <li>Dukungan Prioritas (Email/WA)</li>
                        </ul>
                        <div class="plan-select"><a class="btn btn-bordered text-uppercase" href="#">Pilih Paket</a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan">
                        <div class="price-top text-center px-3 px-lg-0">
                            <h3 class="pb-2">Enterprise</h3>
                            <p>Untuk Toko Online & Portal Besar</p>
                        </div>
                        <div class="price-header text-center my-4 px-3">
                            <div class="plan-cost mt-3"><sup class="plan-sup">Rp</sup><span class="plan-price">1.500.000</span><span class="plan-type fw-7">/bln</span></div>
                        </div>
                        <ul class="plan-features pb-3">
                            <li>Semua di Paket Business</li>
                            <li>Backup Harian</li>
                            <li>Pemindaian Keamanan Mingguan</li>
                            <li>Dukungan Darurat 24/7</li>
                            <li>Jam Dukungan Teknis</li>
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
                        <h2 class="text-white">Jaga Aset Digital Terpenting Anda</h2>
                        <p class="text-white d-none d-sm-block mt-4">Jangan biarkan website Anda usang dan rentan terhadap serangan. Dapatkan perlindungan dan performa terbaik mulai hari ini.</p>
                        <a class="btn btn-lg mt-4" href="#pricing">Amankan Website Saya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection