@extends('layouts.master')

@section('title', 'Beranda - Solusi Digital untuk Bisnis Anda')

@section('body_class', '')

@section('content')

   <section class="section breadcrumb-area  d-flex align-items-center" style="background-image: url({{ asset('assets/img/bg/bg-maintenanceee.jpg') }})">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="welcome-intro text-center">
                        <h1 class="text-white">Solusi Digital untuk Pertumbuhan Bisnis Anda</h1>
                        <p class="text-white my-4">Kami menyediakan layanan pengembangan website, optimasi SEO, hingga infrastruktur cloud untuk membantu bisnis Anda Go-Digital secara efektif dan efisien.</p>
                        <div class="button-group">
                            <a href="#layanan" class="btn btn-bordered-white">Lihat Layanan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="layanan" class="section service-area bg-grey ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-7">
                    <div class="section-heading text-center">
                        <h2>Layanan Unggulan Kami</h2>
                        <p class="d-none d-sm-block mt-4">Kami menawarkan serangkaian layanan digital yang dirancang untuk memenuhi setiap kebutuhan bisnis, dari startup hingga perusahaan besar.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service p-4">
                        <h3 class="my-3">Pengembangan Web</h3>
                        <p>Website profesional, cepat, dan responsif untuk company profile, portal berita, hingga e-commerce.</p>
                        <a class="service-btn mt-3" href="{{ route('layanan.pengembangan-web') }}">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service p-4">
                        <h3 class="my-3">Optimasi SEO</h3>
                        <p>Tingkatkan peringkat website Anda di Google untuk menjangkau lebih banyak pelanggan potensial.</p>
                         <a class="service-btn mt-3" href="{{ route('layanan.seo') }}">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service p-4">
                        <h3 class="my-3">Desain UI/UX</h3>
                        <p>Menciptakan antarmuka yang intuitif dan menarik untuk pengalaman pengguna terbaik.</p>
                         <a class="service-btn mt-3" href="{{ route('layanan.desain') }}">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section cta-area bg-overlay-dark ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="cta-text text-center">
                        <h2 class="text-white">Punya Proyek Digital?</h2>
                        <p class="text-white my-3">Jangan ragu untuk mendiskusikan ide Anda dengan kami. Kami siap membantu mewujudkan proyek digital Anda menjadi kenyataan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection