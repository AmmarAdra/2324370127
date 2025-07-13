<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Jasa Digital untuk membantu pertumbuhan bisnis Anda.">
    <meta name="author" content="Nama Perusahaan Anda">

    <title>@yield('title', 'Solusi Digital Terpercaya') - Nama Perusahaan Anda</title>

    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pe-icon-7-stroke/css/helper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body class="@yield('body_class')">
    <div id="preloader">
        <div id="hostbit-preloader" class="hostbit-preloader">
            <div class="preloader-animation">
                <div class="spinner"></div>
                <div class="loader">
                    <span data-text-preloader="A" class="animated-letters">A</span>
                    <span data-text-preloader="D" class="animated-letters">D</span>
                    <span data-text-preloader="R" class="animated-letters">R</span>
                    <span data-text-preloader="A" class="animated-letters">A</span>
                    <span data-text-preloader="C" class="animated-letters">C</span>
                    <span data-text-preloader="O" class="animated-letters">O</span>
                    <span data-text-preloader="R" class="animated-letters">R</span>
                    <span data-text-preloader="P" class="animated-letters">P</span>
                </div>
                <p class="fw-5 text-center text-uppercase">Loading</p>
            </div>
            <div class="loader-animation">
                <div class="row h-100"><div class="col-3 single-loader p-0"><div class="loader-bg"></div></div><div class="col-3 single-loader p-0"><div class="loader-bg"></div></div><div class="col-3 single-loader p-0"><div class="loader-bg"></div></div><div class="col-3 single-loader p-0"><div class="loader-bg"></div></div></div>
            </div>
        </div>
    </div>
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <div class="main overflow-hidden">

        @include('partials.navbar')

        @yield('content')

        @include('partials.footer')

        <div id="search" class="modal fade p-0"><div class="modal-dialog dialog-animated"><div class="modal-content h-100"><div class="modal-header" data-dismiss="modal">Search <i class="far fa-times-circle icon-close"></i></div><div class="modal-body"><form class="row"><div class="col-12 align-self-center"><div class="row"><div class="col-12 pb-3"><h2 class="search-title mb-3">Apa yang Anda cari?</h2><p>Masukkan kata kunci untuk memulai pencarian.</p></div></div><div class="row"><div class="col-12 input-group"><input type="text" class="form-control" placeholder="Masukkan kata kunci..."></div></div><div class="row"><div class="col-12 input-group align-self-center"><button class="btn btn-bordered mt-3">Cari</button></div></div></div></form></div></div></div></div>
        <div id="menu" class="modal fade p-0"><div class="modal-dialog dialog-animated"><div class="modal-content h-100"><div class="modal-header" data-dismiss="modal">Menu <i class="far fa-times-circle icon-close"></i></div><div class="menu modal-body"><div class="row w-100"><div class="items p-0 col-12 text-center"></div></div></div></div></div></div>
        </div>

    <script src="{{ asset('assets/js/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/plugins.min.js') }}"></script>
    <script src="{{ asset('assets/js/active.js') }}"></script>
</body>

</html>