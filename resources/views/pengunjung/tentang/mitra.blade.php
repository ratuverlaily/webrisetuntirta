@extends('pengunjung.users')

@section('content')

<section id="blog" style="background:#f0f2f5; padding:50px 0;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-2">
                <div class="intro">
                    <h2 class="custom-underline text-judul fw-bold" style="letter-spacing: 4px;">
                        MITRA KERJASAMA
                    </h2>
                </div>
            </div>
        </div>

        <div class="row g-4">
            @if($mitra->count() > 0)
                @foreach($mitra as $mitra)
                    <div class="col-md-4 d-flex">
                        <div class="card shadow-sm w-100">
                            @if($mitra->foto_logo)
                                <img src="{{ asset('assets/imgmitra/'.$mitra->foto_logo) }}" class="card-img-top p-3" alt="{{ $mitra->nama_instansi }}" style="max-height:150px; object-fit:contain;">
                            @else
                                <img src="https://via.placeholder.com/300x150?text=No+Logo" class="card-img-top p-3" alt="No Logo">
                            @endif

                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $mitra->nama_instansi }}</h5>
                                <p class="card-text" style="font-size: 14px; color:#555;">
                                    {{ Str::limit($mitra->deskripsi, 100) }}
                                </p>
                                @if($mitra->link_website)
                                    <a href="{{ $mitra->link_website }}" target="_blank" class="btn btn-sm btn-primary">
                                        Kunjungi Website
                                    </a>
                                @endif
                            </div>

                            <div class="card-footer text-muted" style="font-size: 12px;">
                                Ditambahkan: {{ $mitra->created_at->format('d M Y') }}
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12 text-center py-5">
                    <p class="text-muted">Belum ada data fokus penelitian.</p>
                </div>
            @endif
        </div>

    </div>
</section>

@endsection
