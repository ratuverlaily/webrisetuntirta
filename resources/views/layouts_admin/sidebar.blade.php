<!-- Sidebar -->
<aside class="sidebar">
    <!-- Header / Logo -->
    <div class="sidebar-header">
      <div class="logo-container">
        <img src="{{ asset('assets/img/untir.png') }}" alt="Logo Sikrama" class="logo">
        <h3>SIKRAMA</h3>
        <p class="subtitle">Laboratorium Sistem Rekayasa Kendali, Monitoring AI, WSN, Multi-Agent Berkelanjutan</p>
      </div>
    </div>

    <hr style="border-color: rgba(255,255,255,0.1); margin: 10px 0;" />

    <!-- Navigation Menu -->
    <nav class="menu">
      @if(session('id_role') == 1)
      <ul class="menu-list">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->routeIs('dashboard.*') ? 'active' : '' }}">
          <a href="{{ route('dashboard') }}">
            <i data-lucide="layout-dashboard"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <!-- Tentang Kami -->
        <li class="menu-item {{ request()->routeIs(['visimisi.*','fokuspenelitian.*','roadmap.*','mitrakerjasama.*','fasilitas.*']) ? 'active open' : '' }}">
          <a href="#">
            <i data-lucide="info"></i>
            <span>Tentang Kami</span>
          </a>
          <ul class="submenu">
            <li class="{{ request()->routeIs('visimisi.*') ? 'active' : '' }}"><a href="{{ route('visimisi.view') }}"><i data-lucide="target"></i> Visi Misi</a></li>
            <li class="{{ request()->routeIs('fokuspenelitian.*') ? 'active' : '' }}"><a href="{{ route('fokuspenelitian.view') }}"><i data-lucide="beaker"></i> Fokus Penelitian</a></li>
            <li class="{{ request()->routeIs('roadmap.*') ? 'active' : '' }}"><a href="{{ route('roadmap.view') }}"><i data-lucide="map"></i> Roadmap</a></li>
            <li class="{{ request()->routeIs('mitrakerjasama.*') ? 'active' : '' }}"><a href="{{ route('mitrakerjasama.view') }}"><i data-lucide="handshake"></i> Mitra Kerjasama</a></li>
            <li class="{{ request()->routeIs('fasilitas.*') ? 'active' : '' }}"><a href="{{ route('fasilitas.view') }}"><i data-lucide="building-2"></i>Fasilitas</a></li>
          </ul>
        </li>

        <!-- Artikel Penelitian -->
        <li class="menu-item {{ request()->routeIs('artikel.*') ? 'active open' : '' }}">
            <a href="{{ route('artikel.view') }}">
            <i data-lucide="microscope"></i>
            <span>Artikel Penelitian</span>
            </a>
        </li>

        <!-- Kegiatan -->
        <li class="menu-item">
            <a href="{{ route('kegiatan.view') }}">
            <i data-lucide="calendar-days"></i>
            <span>Kegiatan</span>
            </a>
        </li>

        <!-- Gallery -->
        <li class="menu-item">
            <a href="{{ route('gallery.view') }}">
            <i data-lucide="images"></i>
            <span>Gallery</span>
            </a>
        </li>

        <!-- Anggota -->
        <li class="menu-item">
          <a href="{{ route('anggota.view') }}">
            <i data-lucide="users-round"></i>
            <span>Anggota</span>
          </a>
        </li>

        <!-- Kontak -->
        <li class="menu-item">
          <a href="{{ route('kontak.view') }}">
            <i data-lucide="phone"></i>
            <span>Kontak</span>
          </a>
        </li>
      </ul>
      @endif

      <!-- Logout -->
      <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="logout-link">
          <i data-lucide="log-out"></i>
          <span>Logout</span>
        </button>
      </form>
    </nav>
  </aside>

  {{-- <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
  <script>
    lucide.createIcons();
  </script> --}}
