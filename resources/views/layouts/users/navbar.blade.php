<!-- BOTTOM NAV -->
<nav class="navbar navbar-expand-lg sticky-top navbar-color">
    <div class="container">
            <a class="navbar-brand logo" href="#">
              <img src="{{ asset('assets/imgbr/logo_sikarma.png') }}" alt="">
            </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ asset('/') }}" class="nav-item nav-link {{ request()->routeIs('index') ? 'active' : '' }}">Home</a>

                {{-- Tentang kami --}}
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('tentang.visimisi') || request()->routeIs('tentang.fokuspenelitian')
                    || request()->routeIs('tentang.roadmap') || request()->routeIs('tentang.mitra')
                    || request()->routeIs('tentang.fasilitas') ?'active' : '' }}" data-bs-toggle="dropdown">Tentang Kami</a>
                    <div class="dropdown-menu fade-down my-3">
                        <a href="{{ asset('tentang/visimisi') }}" class="dropdown-item text-white">Visi & Misi</a>
                        <a href="{{ asset('tentang/fokuspenelitian') }}" class="dropdown-item text-white">Fokus Penelitian</a>
                        <a href="{{ asset('tentang/roadmap') }}" class="dropdown-item text-white">Roadmap Penelitian </a>
                        <a href="{{ asset('tentang/mitra') }}" class="dropdown-item text-white">Mitra Kerjasama</a>
                        <a href="{{ asset('tentang/fasilitas') }}" class="dropdown-item text-white">Fasilitas</a>
                    </div>
                </div>

                {{-- Kegiatan --}}
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('kegiatan.sfw') || request()->routeIs('kegiatan.penelitian')
                    || request()->routeIs('kegiatan.pengabdian') ?'active' : '' }}" data-bs-toggle="dropdown">Kegiatan</a>
                    <div class="dropdown-menu fade-down my-3">
                        <a href="{{ asset('kegiatan/sfw') }}" class="dropdown-item text-white">Seminar, FGD & Workshop</a>
                        <a href="{{ asset('kegiatan/penelitian') }}" class="dropdown-item text-white">Penelitian</a>
                        <a href="{{ asset('kegiatan/pengabdian') }}" class="dropdown-item text-white">Pengabdian Masyarakat</a>
                    </div>
                </div>

                {{-- Publikasi --}}
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('publikasi.artikel') || request()->routeIs('publikasi.buku')
                    || request()->routeIs('publikasi.seminar') || request()->routeIs('publikasi.makala') || request()->routeIs('publikasi.paper')
                    || request()->routeIs('publikasi.chapter') ?'active' : '' }}" data-bs-toggle="dropdown">Publikasi</a>
                    <div class="dropdown-menu fade-down my-3">
                        <a href="{{ asset('publikasi/artikel') }}" class="dropdown-item text-white">Artikel Jurnal</a>
                        <a href="{{ asset('publikasi/buku') }}" class="dropdown-item text-white">Buku</a>
                        <a href="{{ asset('publikasi/seminar') }}" class="dropdown-item text-white">Publikasi Seminar</a>
                        <a href="{{ asset('publikasi/makala') }}" class="dropdown-item text-white">Makala</a>
                        <a href="{{ asset('publikasi/paper') }}" class="dropdown-item text-white">Working Paper</a>
                        <a href="{{ asset('publikasi/chapter') }}" class="dropdown-item text-white">Chapters</a>
                    </div>
                </div>

                {{-- Gallery --}}
                <a href="{{ asset('gallery') }}" class="nav-item nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a>

                {{-- Tim Riset --}}
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('anggota') ? 'active' : '' }}" data-bs-toggle="dropdown">Anggota</a>
                    <div class="dropdown-menu fade-down my-3">

                        <a href="{{ asset('anggota') }}" class="dropdown-item text-white">Peneliti & Staf Peneliti</a>
                    </div>
                </div>

                {{-- Kontak --}}
                <a href="{{ asset('kontak') }}" class="nav-item nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}">Kontak</a>

            </div>
        </div>
    </div>
</nav>