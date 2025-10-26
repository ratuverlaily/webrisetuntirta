@extends('pengunjung.users')

@section('content')

<section id="blog" style="background:#f0f2f5; padding:40px 0;">
    <div class="container">
        <div class="row">
            <div class="text-center mb-4">
                <h2 class="custom-underline text-judul fw-bold" style="letter-spacing: 4px;">
                  PENELITI & STAF PENELITI
                </h2>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            @if($data)
                @foreach($data as $item)
                <div class="col-md-6">
                    <!-- Card klikable -->
                    <a href="{{ !empty($item->link_website) ? $item->link_website : '#' }}"
                       target="_blank"
                       class="text-decoration-none text-dark">
                        <div class="card shadow-sm p-3 h-100 hover-card">
                            <div class="d-flex align-items-center">
                                <!-- FOTO -->
                                <div class="flex-shrink-0 me-3 text-center">
                                    @if($item->photo)
                                        <img src="{{ asset('assets/imgdosen/'.$item->photo) }}"
                                             class="rounded-circle shadow"
                                             alt="{{ $item->nama }}"
                                             style="width: 120px; height: 120px; object-fit: cover;">
                                    @else
                                        <img src="{{ asset('assets/imgdosen/default.png') }}"
                                             class="rounded-circle shadow"
                                             alt="No Photo"
                                             style="width: 120px; height: 120px; object-fit: cover;">
                                    @endif
                                </div>

                                <!-- KETERANGAN -->
                                <div class="flex-grow-1">
                                    <!-- Keterangan Jabatan -->
                                    @if(strtolower($item->email) == 'alimuddineeuntirta@yahoo.com')
                                        <span class="badge bg-primary mb-1">Pimpinan Riset Study</span>
                                    @else
                                        <span class="badge bg-secondary mb-1">Anggota</span>
                                    @endif

                                    <!-- Nama -->
                                    <h5 class="card-title mb-1">{{ $item->nama }}</h5>

                                    <!-- Keahlian -->
                                    <p class="text-muted mb-0" style="font-size: 14px;">
                                        {{ Str::limit($item->keahlian, 120) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            @endif
        </div>

    </div>
</section>

<style>
    /* Efek hover supaya lebih menarik */
    .hover-card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .hover-card:hover {
        transform: translateY(-5px);
    }
</style>

@endsection