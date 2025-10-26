@extends('pengunjung.users')

@section('content')

@include('layouts.users.slider')

<section id="blog" style="background:#f0f2f5; padding:60px 0;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <div class="intro">
                    <h1 class="utama">FOKUS PENELITIAN</h1>
                </div>
            </div>
        </div>
        <div class="row g-4 d-flex justify-content-center">
            @if($fokusPenelitian->count() > 0)
                @foreach($fokusPenelitian as $item)
                    <!-- Card 1 -->
                    <div class="col-md-4">
                        <div class="card-blog d-flex" tabindex="0">
                            <div class="card-img text-center">
                                <img src="{{ asset("assets/imgbr/".$item->gambar) }}" alt="AI" />
                            </div>
                            <div class="card-text">
                                <h3>{{ $item->judul }}</h3>
                                <p>
                                    {{ $item->deskripsi }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>

{{-- <div class="ratio ratio-16x9">
    <iframe
        src="https://www.youtube.com/embed/ImtZ5yENzgE"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
    </iframe>
</div> --}}

<section id="kegiatan" class="text-center py-5 bg-light">
    <div class="container">
        {{-- Judul Section --}}
        <div class="row mb-5">
            <div class="col-12">
                <h6 class="text-uppercase text-muted mb-2">S I K R A M A</h6>
                <h1 class="fw-bold text-primary mb-3">KEGIATAN</h1>
                <p class="mx-auto" style="max-width: 800px;">
                    SIKRAMA aktif dalam kegiatan riset, pengembangan, dan implementasi teknologi berbasis AI,
                    sistem kendali cerdas, WSN, serta multi-agent.
                    Berikut beberapa dokumentasi kegiatan kami.
                </p>
            </div>
        </div>

        {{-- Galeri Foto --}}
        <div class="row g-4">
            <!-- Item 1 -->
            <div class="col-md-4 col-sm-6">
                <a href="https://identitasunhas.com/dorong-hilirisasi-riset-emg-unhas-terima-kunjungan-dari-untirta/"
                target="_blank"
                rel="noopener noreferrer"
                style="text-decoration: none; color: inherit;">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden kegiatan-item">
                    <div class="img-container position-relative">
                        <img src="{{ asset('assets/imgkegiatan/gambar1.jpg') }}"
                             class="w-100 h-100 object-fit-cover"
                             style="aspect-ratio: 16/9;"
                             alt="Workshop AI">
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <span class="text-white fw-semibold">Lihat Detail</span>
                        </div>
                    </div>
                    <div class="p-3 bg-white">
                        <h5 class="fw-bold mb-1">Dorong Hilirisasi Riset EMG</h5>
                        <p class="small text-muted mb-0">
                            Kunjungan Tim Kepakaran Alat Tongue Smart Elektromiografi (EMG) Universitas Sultan Ageng Tirtayasa (UNTIRTA) di Fakultas Kedokteran UNHAS
                        </p>
                    </div>
                </div>
                </a>
            </div>

            <!-- Item 2 -->
            <div class="col-md-4 col-sm-6">
                <a href="https://untirta.ac.id/2022/11/03/matching-fund-kedaireka-untirta-gelar-lokakarya/"
                target="_blank"
                rel="noopener noreferrer"
                style="text-decoration: none; color: inherit;">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden kegiatan-item">
                    <div class="img-container position-relative">
                        <img src="{{ asset('assets/imgkegiatan/gambar2.jpg') }}"
                             class="w-100 h-100 object-fit-cover"
                             style="aspect-ratio: 16/9;"
                             alt="FGD Multi-Agent System">
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <span class="text-white fw-semibold">Lihat Detail</span>
                        </div>
                    </div>
                    <div class="p-3 bg-white">
                        <h5 class="fw-bold mb-1">Matching Fund Kedaireka Untirta Gelar Lokakarya</h5>
                        <p class="small text-muted mb-0">
                            Program Kedaireka menjadi jembatan antara pembuat kebijakan (pemerintah), peneliti (Untirta) dan pebisnis (PT ABM).
                        </p>
                    </div>
                </div>
                </a>
            </div>

            <!-- Item 3 -->
            <div class="col-md-4 col-sm-6">
                <a href="https://untirta.ac.id/2021/11/04/dosen-teknik-elektro-untirta-paparkan-proyek-penelitiannya-pada-webinar-internasional-world-class-professor-wcp-2021/"
                target="_blank"
                rel="noopener noreferrer"
                style="text-decoration: none; color: inherit;">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden kegiatan-item">
                    <div class="img-container position-relative">
                        <img src="{{ asset('assets/imgkegiatan/gambar3.jpeg') }}"
                             class="w-100 h-100 object-fit-cover"
                             style="aspect-ratio: 16/9;"
                             alt="Pengabdian Masyarakat">
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <span class="text-white fw-semibold">Lihat Detail</span>
                        </div>
                    </div>
                    <div class="p-3 bg-white">
                        <h5 class="fw-bold mb-1">Webinar Internasional World Class Professor (WCP)</h5>
                        <p class="small text-muted mb-0">
                            Proyek penelitian bertajuk “Smart Control System for Multi-Agent on Industrial and Agriculture (Smart Farming)
                        </p>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
</section>



<section id="team" class="py-5 bg-light" style="background:#c7c7c9; padding:60px 0;">
    <div class="container">
      <div class="row align-items-center">

        <!-- Bagian Card Keterangan Kanan -->
        <div class="col-md-7 mt-4 mt-md-0">
          <div class="card shadow-lg border-0 rounded-3 p-4">
            <div class="card-body">
              <h3 class="card-title fw-bold mb-3">S I K R A M A</h3>
              <p class="card-text">
                SIKRAMA mendukung pencapaian SDGs UNTIRTA melalui riset rekayasa kendali, AI, WSN, dan multi-agent. Fokus utama diarahkan pada:
              </p>
              <ul class="mb-0">
                <li>Pengentasan kemiskinan & ketahanan pangan lewat monitoring pertanian.</li>
                <li>Kesehatan & pendidikan dengan sistem sensor cerdas dan transfer pengetahuan.</li>
                <li>Energi bersih & inovasi industri melalui PLTS, smart grid, dan automasi.</li>
                <li>Kota berkelanjutan & iklim dengan pemantauan lingkungan dan mitigasi bencana.</li>
                <li>Ekosistem darat & laut melalui konservasi berbasis sensor.</li>
                <li>Kemitraan global dengan kolaborasi lintas lembaga dan masyarakat.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Bagian Gambar Kiri -->
        <div class="col-md-5 text-center">
            <img src="{{ asset('assets/imgbr/SDGs.png') }}" alt="SDGs" class="img-fluid rounded shadow">
        </div>

      </div>
    </div>
</section>

<!-- Section Logo -->
<section class="py-5" id="portfolio">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col-12">
                <div class="intro">
                        <h6>S I K R A M A</h6>
                        {{-- <h2 class="fw-bold">KOLABORASI</h2> --}}
                        <h2 class="utama">KOLABORASI</h2>
                </div>
            </div>
        </div>

        <!-- Logo Slider -->
        <div id="logo-slider" class="owl-carousel owl-theme">
            @if($mitra->count() > 0)
                @foreach($mitra as $mitra)
                    <div class="item">
                        <a href="{{ $mitra->link_website }}" target="_blank" rel="noopener noreferrer">
                            <div class="logo-wrapper">
                                <img src="{{ asset("assets/imgmitra/".$mitra->foto_logo) }}" class="logo-circle" alt="Logo 1">
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>

    </div>
</section>

<section id="profil-alimuddin" class="py-5" style="background:#e2e3e5;">
    <div class="container">
      <div class="row d-flex align-items-stretch">

        <!-- Bagian Gambar Kiri -->
        <div class="col-md-5 d-flex flex-column justify-content-center align-items-center mb-4 mb-md-0">
          <div class="card border-0 shadow-lg rounded-4 w-100 h-100 d-flex justify-content-center align-items-center" style="background:#ffffff;">
            <div class="p-4 text-center">
              <img src="{{ asset('assets/imgdosen/profalimudin.png') }}"
                   alt="Prof. Dr. Ir. Alimuddin, M.M."
                   class="img-fluid rounded-4 shadow-sm border border-3 border-white mb-3"
                   style="max-width: 85%; height: auto;">
              <h5 class="fw-semibold mb-1">Prof. Dr. Alimuddin, S.T., M.M., M.T.</h5>
              <p class="text-muted mb-0">Guru Besar Teknik Elektro, Universitas Sultan Ageng Tirtayasa</p>
            </div>
          </div>
        </div>

        <!-- Bagian Deskripsi Kanan -->
        <div class="col-md-7 d-flex">
          <div class="card shadow-lg border-0 rounded-4 p-4 w-100" style="background:#ffffff;">
            <div class="card-body d-flex flex-column justify-content-center">
              <h4 class="card-title mb-3 text-primary">Profil Singkat</h4>

              <p style="text-align: justify;">
                Prof. Dr. Alimuddin, S.T., M.M., M.T. adalah akademisi dan peneliti di bidang teknik elektro, Smart Control, Artificial Intelligence dan Renewable Energy.
                Fokus keilmuannya mencakup pengembangan Smart Control Multi-Agent Systems (SCMA) yang diterapkan pada rumah tropis, sistem pertanian, dan peralatan medis seperti inkubator bayi.
                Penelitiannya banyak memadukan kecerdasan buatan, logika fuzzy, PID control, dan ANFIS dalam sistem kendali berbasis sensor dan mikrokontroler.
              </p>

              <p style="text-align: justify;">
                Dalam karier akademiknya, beliau aktif mempublikasikan karya ilmiah pada jurnal nasional terakreditasi dan jurnal internasional bereputasi.
                Beberapa risetnya terbit di jurnal <em>Energies (MDPI)</em>, <em>Journal of Robotics and Control (JRC)</em>, dan <em>International Journal of Power Electronics and Drive Systems (IJPEDS)</em>.
              </p>

              <p style="text-align: justify; margin-bottom:0;">
                Prof. Alimuddin menempuh pendidikan S1 Teknik Elektro di Universitas Muslim Indonesia (1999), S2 Magister Manajemen di universitas yang sama (2002), dan Magister Teknik Elektro di Universitas Hasanuddin (2003).
                Gelar doktor diperoleh dari IPB University dalam bidang Ilmu Keteknikan Pertanian tahun 2012 dengan riset di Universitas Tsukuba, Jepang.
                Ia juga menyelesaikan Program Profesi Insinyur di Institut Teknologi Indonesia pada periode 2023–2024.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
</section>

@endsection