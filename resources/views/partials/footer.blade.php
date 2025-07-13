<footer class="section footer-area bg-dark">
    <div class="footer-top ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="footer-items">
                        <a class="navbar-brand" href="{{ route('beranda') }}">
                            <img src="{{ asset('assets/img/logo/logo-white.png') }}" alt="Logo Perusahaan">
                        </a>
                        <p class="text-white-50 my-3">Solusi digital terpadu untuk membantu pertumbuhan bisnis Anda di era modern. Andal, cepat, dan aman.</p>
                        <ul class="social-icons list-inline pt-2">
                            <li class="list-inline-item px-1"><a href="#" target="_blank" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                            <li class="list-inline-item px-1"><a href="#" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item px-1"><a href="#" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-items">
                        <h3 class="footer-title text-uppercase mb-2">Layanan</h3>
                        <ul>
                            {{-- DAFTAR LAYANAN LENGKAP (7 ITEM) --}}
                            <li class="py-2"><a class="link-hover text-white-50" href="{{ route('layanan.pengembangan-web') }}">Pengembangan Web</a></li>
                            <li class="py-2"><a class="link-hover text-white-50" href="{{ route('layanan.desain') }}">Desain UI/UX</a></li>
                            <li class="py-2"><a class="link-hover text-white-50" href="{{ route('layanan.seo') }}">Optimasi SEO</a></li>
                            <li class="py-2"><a class="link-hover text-white-50" href="{{ route('layanan.digital-marketing') }}">Digital Marketing</a></li>
                            <li class="py-2"><a class="link-hover text-white-50" href="{{ route('layanan.maintenance') }}">Maintenance Website</a></li>
                            <li class="py-2"><a class="link-hover text-white-50" href="{{ route('layanan.cloud') }}">Infrastruktur Cloud</a></li>
                            <li class="py-2"><a class="link-hover text-white-50" href="{{ route('layanan.toko-online') }}">Toko Online</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="footer-items">
                        <h3 class="footer-title text-uppercase mb-2">Perusahaan</h3>
                        <ul>
                            <li class="py-2"><a class="link-hover text-white-50" href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-items">
                        <h3 class="footer-title text-uppercase mb-2">Hubungi Kami</h3>
                        <p class="text-white-50">Jalan. In Aja No. 99<br>Kota, Kode Pos 12345</p>
                        <p class="text-white-50">Email: <a href="mailto:info@perusahaan.com" class="link-hover">info@perusahaan.com</a></p>
                        <p class="text-white-50">Telepon: <a href="tel:+628123456789" class="link-hover">+62 812-3456-7890</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                        <div class="copyright-left text-white-50">&copy; Copyright {{ date('Y') }} <a href="{{ route('beranda') }}">AdraCorp</a>. All Rights Reserved.</div>
                        <div class="copyright-right text-white-50">Made with <i class="fas fa-heart"></i> in Indonesia</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>