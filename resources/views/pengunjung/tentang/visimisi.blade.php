@extends('pengunjung.users')

@section('content')

<div class="container py-5">
    <div class="text-center mb-4">
      <h2 class="custom-underline text-judul fw-bold" style="letter-spacing: 4px;">
        {{ $visimisi->title }}
      </h2>
    </div>

    <div class="card border-0 shadow-lg rounded-4"
         style="background: linear-gradient(145deg, #f9fbff, #eef3ff);">
      <div class="card-body p-5">

        {{-- Tampilkan konten dari Summernote --}}
        <div class="content mt-3 pt-2"
             style="line-height: 1.9; font-size: 1.1rem; text-align: justify; color: #333;">
          {!! $visimisi->content !!}
        </div>

      </div>
    </div>
  </div>



@endsection