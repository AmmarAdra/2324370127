@extends('layouts.master')

@section('title', 'Tentang Kami')

@section('body_class', '')

@section('content')

    <section class="section breadcrumb-area   d-flex align-items-center" style="background-image: url({{ asset('assets/img/bg/bg-tentang.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="text-white mb-3">Tentang Kami</h2>
                        <p class="text-white">Mengenal lebih dekat tim, visi, dan nilai-nilai yang menjadi fondasi kami dalam memberikan solusi digital terbaik untuk Anda.</p>
                        <ol class="breadcrumb d-flex justify-content-center mt-3">
                            <li class="breadcrumb-item"><a class="text-uppercase text-white" href="{{ route('beranda') }}">Home</a></li>
                            <li class="breadcrumb-item text-white active">Tentang Kami</li>
                        </ol>
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
                            <h2 class="mb-3">Cerita Kami: Dari Ide Menjadi Solusi Digital</h2>
                            <p>Berawal dari semangat untuk membantu bisnis lokal bertransformasi secara digital, perusahaan kami didirikan dengan satu misi: menyediakan solusi teknologi yang tidak hanya canggih, tetapi juga terjangkau dan mudah diimplementasikan.</p>
                            <p class="mt-2">Kami percaya setiap bisnis, besar maupun kecil, berhak memiliki kehadiran online yang kuat untuk dapat bersaing dan bertumbuh di era modern. Kami hadir sebagai mitra strategis Anda untuk mewujudkan hal tersebut.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 text-center">
                    <div class="content-thumb pt-5 pt-lg-0">
                        <img src="{{ asset('assets/img/content/content_thumb.png') }}" alt="Our Story">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section content-area bg-grey ptb_100">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-lg-5 order-2 order-lg-1">
                    <div class="content-thumb text-center pt-5 pt-lg-0">
                        <img src="{{ asset('assets/img/content/content_thumb_2.png') }}" alt="Our Values">
                    </div>
                </div>
                <div class="col-12 col-lg-6 order-1 order-lg-2">
                    <div class="content-inner">
                        <div class="section-heading mb-3">
                            <h2 class="mb-3">Nilai-Nilai yang Kami Pegang Teguh</h2>
                        </div>
                        <ul class="content-list">
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4"><i class="fas fa-check-circle"></i></div>
                                <div class="content-text media-body"><strong>Kemitraan Strategis:</strong> Kami bukan sekadar vendor, kami adalah mitra yang peduli pada kesuksesan jangka panjang Anda.</div>
                            </li>
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4"><i class="fas fa-check-circle"></i></div>
                                <div class="content-text media-body"><strong>Inovasi Berkelanjutan:</strong> Kami terus belajar dan beradaptasi dengan teknologi terbaru untuk memberikan solusi yang relevan dan efektif.</div>
                            </li>
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4"><i class="fas fa-check-circle"></i></div>
                                <div class="content-text media-body"><strong>Kualitas Tanpa Kompromi:</strong> Kami berkomitmen untuk memberikan hasil kerja dengan standar kualitas tertinggi dalam setiap detail proyek.</div>
                            </li>
                             <li class="single-content-list media py-2">
                                <div class="content-icon pr-4"><i class="fas fa-check-circle"></i></div>
                                <div class="content-text media-body"><strong>Integritas & Transparansi:</strong> Kejujuran dan komunikasi yang terbuka adalah fondasi dari setiap hubungan kami dengan klien.</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section team-area ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-7">
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Temui Tim Ahli Kami</h2>
                        <p class="d-none d-sm-block mt-4">Kami adalah sekelompok profesional yang bersemangat dalam teknologi dan berdedikasi untuk membantu kesuksesan klien kami.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team text-center m-2 m-lg-0">
                        <div class="team-thumb">
                            <img class="w-100" src="{{ asset('assets/img/avatar/avatar-1.png') }}" alt="Team Member 1">
                        </div>
                        <div class="team-content p-3">
                            <h3 class="team-name">Andi Wijaya</h3>
                            <h5 class="team-post">Founder & CEO</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team text-center m-2 m-lg-0">
                        <div class="team-thumb">
                            <img class="w-100" src="{{ asset('assets/img/avatar/avatar-2.png') }}" alt="Team Member 2">
                        </div>
                        <div class="team-content p-3">
                            <h3 class="team-name">Siti Rahayu</h3>
                            <h5 class="team-post">Lead Developer</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team text-center m-2 m-lg-0">
                        <div class="team-thumb">
                            <img class="w-100" src="{{ asset('assets/img/avatar/avatar-3.png') }}" alt="Team Member 3">
                        </div>
                        <div class="team-content p-3">
                            <h3 class="team-name">Budi Prasetyo</h3>
                            <h5 class="team-post">Head of Digital Marketing</h5>
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
                        <h2 class="text-white">Mari Berkolaborasi</h2>
                        <p class="text-white d-none d-sm-block mt-4">Kami ingin mendengar tentang ide dan proyek Anda. Hubungi kami untuk memulai diskusi dan melihat bagaimana kami dapat membantu Anda bertumbuh.</p>
                        <a class="btn btn-lg mt-4" href="#">Hubungi Kami Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection