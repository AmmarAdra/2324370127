<header id="header">
    <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
        <div class="container header">
            <a class="navbar-brand" href="{{ route('beranda') }}">
                <img class="navbar-brand-regular" src="{{ asset('assets/img/logo/logo-white.png') }}" alt="brand-logo">
                <img class="navbar-brand-sticky" src="{{ asset('assets/img/logo/logo.png') }}" alt="sticky brand-logo">
            </a>
            <div class="ml-auto"></div>
            <ul class="navbar-nav items">
                <li class="nav-item"><a href="{{ route('beranda') }}" class="nav-link">Beranda</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">Layanan <i class="fas fa-angle-down ml-1"></i></a>
                    <ul class="dropdown-menu items">
                        <li class="nav-item"><a href="{{ route('layanan.pengembangan-web') }}" class="nav-link">Pengembangan Web</a></li>
                        <li class="nav-item"><a href="{{ route('layanan.maintenance') }}" class="nav-link">Maintenance Website</a></li>
                        <li class="nav-item"><a href="{{ route('layanan.desain') }}" class="nav-link">Desain UI/UX</a></li>
                        <li class="nav-item"><a href="{{ route('layanan.seo') }}" class="nav-link">Optimasi SEO</a></li>
                        <li class="nav-item"><a href="{{ route('layanan.cloud') }}" class="nav-link">Infrastruktur Cloud</a></li>
                        <li class="nav-item"><a href="{{ route('layanan.toko-online') }}" class="nav-link">Toko Online</a></li>
                        <li class="nav-item"><a href="{{ route('layanan.digital-marketing') }}" class="nav-link">Digital Marketing</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">Domain <i class="fas fa-angle-down ml-1"></i></a>
                    <ul class="dropdown-menu items">
                        <li class="nav-item"><a href="{{ route('domain.pendaftaran') }}" class="nav-link">Pendaftaran Domain</a></li>
                        <li class="nav-item"><a href="{{ route('domain.transfer') }}" class="nav-link">Transfer Domain</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="{{ route('tentang-kami') }}" class="nav-link">Tentang Kami</a></li>
                <li class="nav-item"><a href="{{ route('email-bisnis') }}" class="nav-link">Email Bisnis</a></li>
            </ul>
            <ul class="navbar-nav icons">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#search"><i class="fas fa-search"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav toggle">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#menu"><i class="fas fa-bars toggle-icon m-0"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav action">
    @guest
        {{-- Bagian ini hanya akan tampil jika pengunjung BELUM login --}}
        <li class="nav-item ml-2">
            <a href="{{ route('login') }}" class="btn btn-bordered-white">Login</a>
        </li>
        <li class="nav-item ml-2">
            <a href="{{ route('register') }}" class="btn btn-bordered-white d-none d-sm-inline-block">Register</a>
        </li>
    @else
        {{-- Bagian ini hanya akan tampil jika pengunjung SUDAH login --}}
        <li class="nav-item ml-3">
            <a href="{{ route('dashboard') }}" class="btn btn-bordered-white">
                <i class="fas fa-tachometer-alt contact-icon mr-md-2"></i>Dashboard
            </a>

            {{-- Opsi untuk tombol logout di dalam dropdown profile --}}
            {{-- <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="btn btn-bordered-white">
                    Logout
                </a>
            </form> --}}
        </li>
    @endguest
</ul>
        </div>
    </nav>
</header>