@extends('layouts.master')

@section('title', 'Pendaftaran Nama Domain')

@section('body_class', 'domain')

@section('content')

    <section class="section breadcrumb-area  d-flex align-items-center" style="background-image: url({{ asset('assets/img/bg/bg-domain.jpg') }})">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="domain-content section-heading text-center mb-0">
                        <h2 class="text-white">Temukan Nama Domain Sempurna Anda</h2>
                        <p class="text-white my-3">Mulai identitas online Anda dengan nama domain yang unik. Masukkan nama yang Anda inginkan dan pilih dari ratusan ekstensi domain populer.</p>
                        <div class="domain-form m-auto">
                            <input type="text" class="form-control" placeholder="Ketik nama domain yang Anda inginkan...">
                            <button type="submit" class="btn btn-bordered"><i class="fas fa-search mr-2"></i>Cari</button>
                        </div>
                        <div class="domain-type mt-4">
                            <a class="single-domain-type text-white d-inline-flex flex-column p-3" href="#">
                                <span class="fw-7 mb-1">.com</span>
                                <span class="fw-5">$8.99</span>
                            </a>
                            <a class="single-domain-type text-white d-inline-flex flex-column p-3" href="#">
                                <span class="fw-7 mb-1">.id</span>
                                <span class="fw-5">$15.99</span>
                            </a>
                            <a class="single-domain-type text-white d-inline-flex flex-column p-3" href="#">
                                <span class="fw-7 mb-1">.co.id</span>
                                <span class="fw-5">$18.99</span>
                            </a>
                            <a class="single-domain-type text-white d-inline-flex flex-column p-3" href="#">
                                <span class="fw-7 mb-1">.xyz</span>
                                <span class="fw-5">$0.99</span>
                            </a>
                            <a class="single-domain-type text-white d-inline-flex flex-column p-3" href="#">
                                <span class="fw-7 mb-1">.net</span>
                                <span class="fw-5">$12.99</span>
                            </a>
                            <a class="single-domain-type text-white d-inline-flex flex-column p-3" href="#">
                                <span class="fw-7 mb-1">.org</span>
                                <span class="fw-5">$11.99</span>
                            </a>
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
                        <h2 class="text-capitalize">Setiap Langkah Menuju Sukses Online</h2>
                        <p class="d-none d-sm-block mt-4">Memiliki nama domain adalah langkah pertama. Kami siap membantu Anda di setiap tahap selanjutnya untuk memastikan kesuksesan digital Anda.</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="content-inner">
                        <div class="section-heading mb-3">
                            <h2 class="mb-3">1. Daftarkan Domain Anda</h2>
                            <p>Daftarkan nama domain untuk menciptakan identitas online Anda. Gunakan pencarian domain kami untuk mendapatkan pilihan ideal Anda sekarang juga.</p>
                            <a class="service-btn mt-3" href="#">Lihat Semua Ekstensi Domain</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 text-center">
                    <div class="content-thumb pt-5 pt-lg-0">
                        <img src="{{ asset('assets/img/content/content_thumb.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center ptb_100">
                <div class="col-12 col-lg-5 order-2 order-lg-1">
                    <div class="content-thumb text-center pt-5 pt-lg-0">
                        <img src="{{ asset('assets/img/content/content_thumb_3.png') }}" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-6 order-1 order-lg-2">
                    <div class="content-inner">
                        <div class="section-heading mb-3">
                            <h2 class="mb-3">2. Pilih Hosting yang Tepat</h2>
                            <p>Setiap domain membutuhkan "rumah" untuk menyimpan data website. Temukan hosting yang sempurna untuk domain Anda, baik Cloud Hosting, VPS, atau Dedicated Server, kami punya semuanya.</p>
                            <a class="service-btn mt-3" href="{{ route('layanan.cloud') }}">Pilih Paket Hosting</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="content-inner">
                        <div class="section-heading mb-3">
                            <h2 class="mb-3">3. Sudah Punya Domain?</h2>
                            <p>Jika Anda sudah memiliki nama domain di provider lain, Anda bisa dengan mudah memindahkannya ke layanan kami untuk pengelolaan yang lebih terpusat dan mudah.</p>
                            <a class="service-btn mt-3" href="{{ route('domain.transfer') }}">Transfer Domain Anda</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 text-center">
                    <div class="content-thumb pt-5 pt-lg-0">
                        <img src="{{ asset('assets/img/content/content_thumb_4.png') }}" alt="">
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
                                            <h2 class="mb-0"><button class="btn px-0 py-3" type="button" data-toggle="collapse" data-target="#collapseOne">Apa itu nama domain?</button></h2>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#sApp-accordion">
                                            <div class="card-body px-0 py-3">Nama domain adalah alamat unik yang digunakan orang untuk mengunjungi website Anda di internet, contohnya `google.com` atau `perusahaananda.id`. Ini adalah identitas utama Anda di dunia digital.</div>
                                        </div>
                                    </div>
                                    <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                        <div class="card-header bg-inherit border-0 p-0">
                                            <h2 class="mb-0"><button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseTwo">Ekstensi domain apa yang harus saya pilih?</button></h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#sApp-accordion">
                                            <div class="card-body px-0 py-3">Pilihan paling populer dan direkomendasikan adalah `.com`. Namun, jika target pasar Anda spesifik di Indonesia, `.id` atau `.co.id` adalah pilihan yang sangat baik. Ekstensi lain seperti `.xyz` atau `.online` cocok untuk proyek kreatif atau startup.</div>
                                        </div>
                                    </div>
                                    <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                        <div class="card-header bg-inherit border-0 p-0">
                                            <h2 class="mb-0"><button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseThree">Bisakah saya membeli domain saja tanpa hosting?</button></h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#sApp-accordion">
                                            <div class="card-body px-0 py-3">Tentu saja. Anda dapat mendaftarkan nama domain terlebih dahulu untuk mengamankannya. Anda bisa menambahkan paket hosting kapan saja saat Anda siap untuk membuat website atau email.</div>
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
                        <h2 class="text-white">Siap Membangun Kehadiran Online Anda?</h2>
                        <p class="text-white d-none d-sm-block mt-4">Semuanya dimulai dengan nama domain yang hebat. Daftarkan nama domain impian Anda sebelum diambil orang lain!</p>
                        <a class="btn btn-lg mt-4" href="#search-domain">Cari Domain Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection