@extends('pengunjung.users')

@section('content')

<div class="container py-5">
    <div class="text-center mb-4">
        <h2 class="custom-underline text-judul fw-bold" style="letter-spacing: 4px;">
            ARTIKEL PENELITIAN
        </h2>
    </div>

    <div class="card border-0 shadow-lg rounded-4"
         style="background: linear-gradient(145deg, #f9fbff, #eef3ff);">
      <div class="card-body p-5">

        <div class="content mt-3 pt-2"
             style="line-height: 1.9; font-size: 1.1rem; text-align: justify; color: #333;">

          @foreach($artikels as $artikel)
            <h3 class="fw-bold mb-3" style="font-size: 1.8rem;">
              {{ $artikel->judul }}
            </h3>
            <p>
              {{ $artikel->deskripsi }}
            </p>

            <p class="mt-3">
              <strong>Source :</strong>
              <a href="{{ $artikel->link }}" target="_blank" style="color: #e67e22;">
                  {{ $artikel->link }}
              </a><br>
              <strong>Authors :</strong> {{ $artikel->penulis }}
            </p>

            <hr class="my-5" style="border-top: 2px dashed #ccc;">
          @endforeach

          <!-- Pagination -->
          <div class="d-flex justify-content-center mt-5">
              {{ $artikels->links('pagination::bootstrap-5') }}
          </div>

        </div>
      </div>
    </div>
</div>

@endsection

