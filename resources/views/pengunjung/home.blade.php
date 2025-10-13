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

<section id="services" class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="intro">
            <h6>S I K R A M A</h6>
            <h1 class="utama">KEGIATAN</h1>
            <p class="mx-auto">
              SIKRAMA aktif dalam kegiatan riset, pengembangan, dan implementasi teknologi berbasis AI, sistem kendali cerdas, WSN, serta multi-agent. Kegiatannya meliputi penelitian, workshop, publikasi ilmiah, hingga pengabdian masyarakat untuk penerapan teknologi berkelanjutan.
            </p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="ratio ratio-16x9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/4ctUehUA1uY?si=z4peIflYBkuV6tGn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
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
                        <div class="logo-wrapper">
                            <img src="{{ asset("assets/imgmitra/".$mitra->foto_logo) }}" class="logo-circle" alt="Logo 1">
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

    </div>
</section>

@endsection