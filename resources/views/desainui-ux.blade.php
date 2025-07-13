@extends('layouts.master')

@section('title', 'Jasa Desain UI/UX Profesional')

@section('body_class', 'domain')

@section('content')

    <section class="section breadcrumb-area  d-flex align-items-center" style="background-image: url({{ asset('assets/img/bg/bg-ux.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="text-white mb-3">Desain UI/UX yang Berpusat pada Pengguna</h2>
                        <p class="text-white">Kami menciptakan antarmuka yang tidak hanya indah, tetapi juga intuitif dan fungsional untuk meningkatkan kepuasan pengguna dan mencapai tujuan bisnis Anda.</p>
                        <ol class="breadcrumb d-flex justify-content-center mt-3">
                            <li class="breadcrumb-item"><a class="text-uppercase text-white" href="{{ route('beranda') }}">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-uppercase text-white" href="#">Layanan</a></li>
                            <li class="breadcrumb-item text-white active">Desain UI/UX</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section promo-area promo-2 overflow-hidden ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 res-margin">
                    <div class="single-promo text-center icon-1">
                        <div class="promo-content mt-3">
                            <h3 class="mb-2">Riset & Analisis</h3>
                            <p>Kami memulai setiap proyek dengan riset mendalam terhadap target pengguna dan kompetitor untuk membangun fondasi desain yang kuat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 res-margin">
                    <div class="single-promo text-center icon-1">
                        <div class="promo-content mt-3">
                            <h3 class="mb-2">Desain & Prototyping</h3>
                            <p>Dari wireframe, mockup, hingga prototipe interaktif, kami memvisualisasikan ide Anda menjadi desain yang siap diuji dan dikembangkan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-promo text-center icon-1">
                        <div class="promo-content mt-3">
                            <h3 class="mb-2">Pengujian & Validasi</h3>
                            <p>Kami melakukan pengujian pengguna (user testing) untuk memastikan desain yang kami hasilkan benar-benar mudah digunakan dan efektif.</p>
                        </div>
                    </div>
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
                            <h2>Dari Ide Menjadi Prototipe Interaktif</h2>
                            <p>Proses desain kami transparan dan kolaboratif. Kami mengubah ide abstrak Anda menjadi desain yang nyata melalui beberapa tahapan:</p>
                        </div>
                        <ul class="content-list">
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4"><i class="fas fa-angle-double-right"></i></div>
                                <div class="content-text media-body"><span><b>User Flow & Wireframe:</b> Merancang alur pengguna dan kerangka dasar tata letak.</span></div>
                            </li>
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4"><i class="fas fa-angle-double-right"></i></div>
                                <div class="content-text media-body"><span><b>High-Fidelity Mockup:</b> Mendesain tampilan antarmuka (UI) yang detail dan menarik secara visual.</span></div>
                            </li>
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4"><i class="fas fa-angle-double-right"></i></div>
                                <div class="content-text media-body"><span><b>Interactive Prototype:</b> Membuat simulasi produk yang dapat diklik untuk merasakan pengalaman pengguna (UX) sebelum development.</span></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-6 text-center">
                    <div class="content-thumb pt-5 pt-lg-0">
                        <img src="{{ asset('assets/img/content/content_thumb.png') }}" alt="">
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
                        <h2>Paket Desain UI/UX</h2>
                        <p class="d-none d-sm-block mt-4">Pilih paket yang paling sesuai dengan kebutuhan proyek Anda. Kami juga menyediakan paket kustom.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan">
                        <div class="price-top text-center px-3 px-lg-0">
                            <h3 class="pb-2">Basic</h3>
                            <p>Untuk Website Sederhana</p>
                        </div>
                        <div class="price-header text-center my-4 px-3">
                            <div class="plan-cost mt-3"><span class="plan-price">Mulai dari</span></div>
                            <h4 class="plan-tags text-uppercase"><p class="price-text">Rp 3 Juta</p></h4>
                        </div>
                        <ul class="plan-features pb-3">
                            <li>Desain hingga 5 Halaman</li>
                            <li>Wireframe & Mockup</li>
                            <li>1x Revisi Desain</li>
                            <li>Source File (Figma)</li>
                        </ul>
                        <div class="plan-select"><a class="btn btn-bordered text-uppercase" href="#">Pilih Paket</a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan featured">
                        <div class="featured-box bg-indigo text-center p-3"><h3 class="text-white text-uppercase">Populer</h3></div>
                        <div class="price-top text-center px-3 px-lg-0">
                            <h3 class="pb-2">Standard</h3>
                            <p>Untuk Aplikasi atau Website Kompleks</p>
                        </div>
                        <div class="price-header text-center mt-4 px-3">
                             <div class="plan-cost mt-3"><span class="plan-price">Mulai dari</span></div>
                            <h4 class="plan-tags text-uppercase"><p class="price-text">Rp 8 Juta</p></h4>
                        </div>
                        <ul class="plan-features pb-3">
                            <li>Desain hingga 15 Halaman/Screen</li>
                            <li>Wireframe, Mockup & Prototipe</li>
                            <li>3x Revisi Desain</li>
                            <li>Termasuk Mobile & Desktop View</li>
                            <li>Source File (Figma)</li>
                        </ul>
                        <div class="plan-select"><a class="btn btn-bordered text-uppercase" href="#">Pilih Paket</a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan">
                        <div class="price-top text-center px-3 px-lg-0">
                            <h3 class="pb-2">Enterprise</h3>
                            <p>Dengan Design System & Kebutuhan Kustom</p>
                        </div>
                        <div class="price-header text-center my-4 px-3">
                            <div class="plan-cost mt-3"><span class="plan-price">Harga</span></div>
                            <h4 class="plan-tags text-uppercase"><p class="price-text">Kustom</p></h4>
                        </div>
                        <ul class="plan-features pb-3">
                            <li>Jumlah Halaman Kustom</li>
                            <li>Termasuk Pembuatan Design System</li>
                            <li>Revisi Tidak Terbatas</li>
                            <li>User Testing & Report</li>
                            <li>Full Support</li>
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
                        <h2 class="text-white">Siap Meningkatkan Pengalaman Pengguna Anda?</h2>
                        <p class="text-white d-none d-sm-block mt-4">Desain yang baik adalah investasi. Mari diskusikan bagaimana kami dapat membantu membuat produk digital Anda disukai oleh pengguna.</p>
                        <a class="btn btn-lg mt-4" href="#">Diskusikan Proyek Anda</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection