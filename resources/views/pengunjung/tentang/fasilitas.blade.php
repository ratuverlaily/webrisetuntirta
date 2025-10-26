@extends('pengunjung.users')

@section('content')

<section id="blog" style="background:#f0f2f5; padding:50px 0;">
    <div class="container">

        <div class="row">
            <div class="text-center mb-4">
                <h2 class="custom-underline text-judul fw-bold" style="letter-spacing: 4px;">
                  FASILITAS
                </h2>
            </div>
        </div>

        <div class="row g-4">
            @foreach($labs as $lab)
            <div class="col-md-4">
                <div class="card shadow-sm h-100 lab-card" data-bs-toggle="modal" data-bs-target="#labModal{{ $lab->id }}">
                    <img src="{{ asset('assets/imgfasilitas/'.$lab->gambar) }}" class="card-img-top" alt="{{ $lab->nama }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">Laboratorium</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- Modal untuk setiap fasilitas -->
@foreach($labs as $lab)
<div class="modal fade" id="labModal{{ $lab->id }}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent border-0">
      <img src="{{ asset('assets/imgfasilitas/'.$lab->gambar) }}" class="img-fluid rounded shadow" alt="{{ $lab->nama }}">
    </div>
  </div>
</div>
@endforeach

<style>
    /* Efek hover zoom */
    .lab-card img {
        transition: transform 0.4s ease;
        cursor: pointer;
    }
    .lab-card:hover img {
        transform: scale(1.05);
    }
</style>

@endsection
