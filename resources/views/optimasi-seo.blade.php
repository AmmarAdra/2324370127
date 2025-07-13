@extends('layouts.master')

@section('title', 'Jasa Optimasi SEO Profesional')

@section('body_class', 'domain')

@section('content')

    <section class="section breadcrumb-area  d-flex align-items-center" style="background-image: url({{ asset('assets/img/bg/bg-seo.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="breadcrumb-content">
                        <h2 class="text-white mb-3">Jasa Optimasi SEO Profesional</h2>
                        <p class="text-white">Tingkatkan peringkat website Anda di halaman pertama Google, datangkan lebih banyak pengunjung berkualitas, dan tingkatkan konversi bisnis Anda.</p>
                        <a href="#pricing" class="btn btn-lg mt-3">Lihat Paket SEO</a>
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
                        <h2 class="text-capitalize">Proses Optimasi SEO Terstruktur Kami</h2>
                        <p class="d-none d-sm-block mt-4">Kami menerapkan metodologi SEO yang terbukti efektif untuk memberikan hasil yang terukur dan berkelanjutan bagi bisnis Anda.</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="content-inner">
                        <div class="section-heading mb-3">
                            <h2 class="mb-3">Mengapa SEO adalah Investasi Jangka Panjang?</h2>
                            <p>Tidak seperti iklan berbayar, hasil dari optimasi SEO bersifat jangka panjang. Peringkat yang baik akan terus mendatangkan traffic organik berkualitas bahkan setelah kampanye selesai.</p>
                        </div>
                        <ul class="content-list">
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4"><i class="fas fa-angle-double-right"></i></div>
                                <div class="content-text media-body"><span><b>Meningkatkan Visibilitas & Kepercayaan:</b> Muncul di halaman pertama Google akan membangun kepercayaan dan citra brand Anda.</span></div>
                            </li>
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4"><i class="fas fa-angle-double-right"></i></div>
                                <div class="content-text media-body"><span><b>Traffic Berkualitas Tinggi:</b> Menjangkau pengguna yang secara aktif mencari produk atau layanan yang Anda tawarkan.</span></div>
                            </li>
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4"><i class="fas fa-angle-double-right"></i></div>
                                <div class="content-text media-body"><span><b>ROI yang Lebih Baik:</b> SEO menawarkan return on investment yang lebih tinggi dibandingkan strategi marketing lainnya dalam jangka panjang.</span></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-5 text-center">
                    <div class="content-thumb pt-5 pt-lg-0">
                        <img src="{{ asset('assets/img/content/content_thumb_3.png') }}" alt="SEO Investment">
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
                        <h2 class="text-capitalize">Paket Optimasi SEO</h2>
                        <p class="d-none d-sm-block mt-4">Pilih paket SEO yang telah kami rancang sesuai dengan skala dan target bisnis Anda.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan">
                        <div class="price-top text-center px-3 px-lg-0">
                            <h3 class="pb-2">SEO Lokal</h3>
                            <p>Untuk Bisnis dengan Target Lokal</p>
                        </div>
                        <div class="price-header text-center my-4 px-3">
                            <div class="plan-cost mt-3"><sup class="plan-sup">Rp</sup><span class="plan-price">1.5 jt</span><span class="plan-type fw-7">/bln</span></div>
                        </div>
                        <ul class="plan-features pb-3">
                            <li>Analisis 10 Kata Kunci Lokal</li>
                            <li>Optimasi Google Business Profile</li>
                            <li>Optimasi On-Page Dasar</li>
                            <li>Local Link Building</li>
                            <li>Laporan Bulanan</li>
                        </ul>
                        <div class="plan-select"><a class="btn btn-bordered text-uppercase" href="#">Pilih Paket</a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan featured">
                        <div class="featured-box bg-indigo text-center p-3"><h3 class="text-white text-uppercase">Rekomendasi</h3></div>
                        <div class="price-top text-center px-3 px-lg-0">
                             <h3 class="pb-2">SEO Nasional</h3>
                            <p>Untuk Target Pasar Nasional</p>
                        </div>
                        <div class="price-header text-center mt-4 px-3">
                            <div class="plan-cost mt-3"><sup class="plan-sup">Rp</sup><span class="plan-price">4 jt</span><span class="plan-type fw-7">/bln</span></div>
                        </div>
                        <ul class="plan-features pb-3">
                            <li>Analisis 30 Kata Kunci Nasional</li>
                            <li>Optimasi On-Page & Teknis</li>
                            <li>Content Marketing (2 Artikel)</li>
                            <li>Premium Link Building</li>
                            <li>Laporan & Analisis Mendalam</li>
                        </ul>
                        <div class="plan-select"><a class="btn btn-bordered text-uppercase" href="#">Pilih Paket</a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan">
                        <div class="price-top text-center px-3 px-lg-0">
                            <h3 class="pb-2">SEO E-Commerce</h3>
                            <p>Khusus untuk Toko Online</p>
                        </div>
                        <div class="price-header text-center my-4 px-3">
                            <div class="plan-cost mt-3">Harga</div>
                            <h4 class="plan-tags text-uppercase"><p class="price-text">Kustom</p></h4>
                        </div>
                        <ul class="plan-features pb-3">
                            <li>Analisis Kata Kunci Produk</li>
                            <li>Optimasi Halaman Produk</li>
                            <li>Implementasi Schema Markup</li>
                            <li>Strategi Link Building E-commerce</li>
                            <li>Laporan Konversi</li>
                        </ul>
                        <div class="plan-select"><a class="btn btn-bordered text-uppercase" href="#">Hubungi Kami</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section faq-area ptb_100">
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
                                            <h2 class="mb-0">
                                                <button class="btn px-0 py-3" type="button" data-toggle="collapse" data-target="#collapseOne">Berapa lama waktu yang dibutuhkan untuk melihat hasil SEO?</button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#sApp-accordion">
                                            <div class="card-body px-0 py-3">Hasil SEO bervariasi tergantung pada persaingan industri dan kondisi awal website. Umumnya, perubahan signifikan mulai terlihat dalam 3 hingga 6 bulan. SEO adalah strategi jangka panjang yang hasilnya akan terus terasa.</div>
                                        </div>
                                    </div>
                                    <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                        <div class="card-header bg-inherit border-0 p-0">
                                            <h2 class="mb-0">
                                                <button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseTwo">Apakah ada jaminan peringkat #1 di Google?</button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#sApp-accordion">
                                            <div class="card-body px-0 py-3">Tidak ada agensi SEO yang dapat menjamin peringkat #1, karena algoritma Google bersifat dinamis dan di luar kendali kami. Kami menjamin penerapan strategi SEO terbaik untuk meningkatkan visibilitas dan peringkat Anda secara signifikan.</div>
                                        </div>
                                    </div>
                                    <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                        <div class="card-header bg-inherit border-0 p-0">
                                            <h2 class="mb-0">
                                                <button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseThree">Apa bedanya SEO On-Page dan Off-Page?</button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#sApp-accordion">
                                            <div class="card-body px-0 py-3">SEO On-Page adalah optimasi yang dilakukan di dalam website Anda (konten, judul, kecepatan). SEO Off-Page adalah aktivitas di luar website untuk membangun otoritas (seperti link building dari situs lain). Keduanya penting dan kami mengerjakannya secara bersamaan.</div>
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
                        <h2 class="text-white">Siap Mendominasi Halaman Pertama Google?</h2>
                        <p class="text-white d-none d-sm-block mt-4">Hubungi kami untuk analisis website gratis. Temukan potensi tersembunyi bisnis Anda dan mulailah mendatangkan traffic yang Anda inginkan.</p>
                        <a class="btn btn-lg mt-4" href="#">Dapatkan Analisis SEO Gratis</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection