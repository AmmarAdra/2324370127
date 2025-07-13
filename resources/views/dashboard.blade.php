@extends('layouts.master')

@section('title', 'Dasbor Klien')

@section('body_class', 'bg-grey')

@section('content')

    <section class="section breadcrumb-area  d-flex align-items-center" style="background-image: url({{ asset('assets/img/bg/bg-dass.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="text-white mb-3">Dasbor Klien</h2>
                        <p class="text-white">Selamat datang kembali, {{ Auth::user()->name }}! Kelola layanan dan proyek Anda di sini.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section ptb_100">
        <div class="container">

            {{-- Notifikasi Pesan Sukses --}}
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{-- Kartu Statistik Dinamis --}}
            <div class="row mb-5">
                <div class="col-12 col-md-6 col-lg-3 res-margin">
                    <div class="single-promo media p-3 dashboard-card">
                        <i class="pe-7s-folder pe-4x color-primary"></i>
                        <div class="promo-content media-body ml-3">
                            <h3 class="mb-0">{{ count($projects) }}</h3>
                            <p>Total Proyek</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 res-margin">
                     <div class="single-promo media p-3 dashboard-card">
                        <i class="pe-7s-helm pe-4x color-primary"></i>
                        <div class="promo-content media-body ml-3">
                            <h3 class="mb-0">{{ count(Auth::user()->bantuanKliens) }}</h3>
                            <p>Total Tiket</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 res-margin">
                     <div class="single-promo media p-3 dashboard-card">
                        <i class="pe-7s-news-paper pe-4x color-primary"></i>
                        <div class="promo-content media-body ml-3">
                            <h3 class="mb-0">{{ $projects->pluck('invoices')->flatten()->where('status', 'Belum Dibayar')->count() }}</h3>
                            <p>Tagihan Baru</p>
                        </div>
                    </div>
                </div>
                 <div class="col-12 col-md-6 col-lg-3 res-margin">
                     <div class="single-promo media p-3 dashboard-card">
                        <a href="{{ route('profile.edit') }}" class="d-flex align-items-center" style="text-decoration: none; color: inherit;">
                            <i class="pe-7s-user pe-4x color-primary"></i>
                            <div class="promo-content media-body ml-3">
                                <p class="mt-2">Profil Saya</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Tabel Proyek --}}
            <div class="row">
                <div class="col-12">
                    <h3 class="mb-4">Proyek & Layanan Saya</h3>
                    <div class="table-responsive dashboard-table">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Proyek</th>
                                    <th>Layanan</th>
                                    <th>Status Proyek</th>
                                    <th>Jumlah Tagihan</th>
                                    <th>Status Tagihan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($projects as $project)
                                    <tr>
                                        <td>{{ $project->project_name }}</td>
                                        <td><span class="badge badge-info">{{ $project->service->name }}</span></td>
                                        <td><span class="badge badge-warning">{{ $project->status }}</span></td>
                                        <td>
                                            @if($project->invoices->isNotEmpty())
                                                Rp {{ number_format($project->invoices->first()->amount, 0, ',', '.') }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            @if($project->invoices->isNotEmpty())
                                                @php $invoice = $project->invoices->first(); @endphp
                                                <span class="badge @if($invoice->status == 'Lunas') badge-success @elseif($invoice->status == 'Belum Dibayar') badge-danger @else badge-secondary @endif">
                                                    {{ $invoice->status }}
                                                </span>
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td><a href="#" class="btn-sm btn-primary">Detail</a></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Anda belum memiliki proyek atau layanan aktif.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- Bagian Akses Cepat --}}
            <div class="row mt-5">
                <div class="col-12">
                    <h3 class="mb-4">Akses Cepat</h3>
                    <div class="button-group">
                        <a href="{{ route('bantuan.create') }}" class="btn btn-success">Buat Tiket Bantuan Baru</a>
                        <a href="#" class="btn btn-bordered ml-3">Riwayat Tagihan</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection