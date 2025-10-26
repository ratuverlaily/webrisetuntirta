@extends('pengunjung.users')

@section('content')

<section id="blog" style="background:#f0f2f5; padding:50px 0;">
    <div class="container">

        <div class="row">
            <div class="col-12 text-center mb-2">
                <div class="intro">
                    <h2 class="custom-underline text-judul fw-bold" style="letter-spacing: 4px;">
                        FOKUS PENELITIAN
                    </h2>
                </div>
            </div>
        </div>

        <!-- Awal card fokus penelitian -->
        <div class="row g-4 justify-content-center text-center">

            @if($fokusPenelitian->count() > 0)
                @foreach($fokusPenelitian as $item)
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('assets/imgbr/' . $item->gambar) }}" class="card-img-top p-4"
                                style="height: 120px; object-fit: contain;" alt="{{ $item->judul }}">
                            <div class="card-body">
                                <h5 class="card-title text-primary">{{ $item->judul }}</h5>
                                <p class="card-text">{{ $item->deskripsi }}</p>
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
        <!-- Akhir card fokus penelitian -->

    </div>
</section>

@endsection
