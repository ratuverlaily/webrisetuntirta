@extends('layouts_admin.admin_logistik')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/form-style.css') }}">

<div class="container">
    <div class="form-card">
        <h2><i class="bi bi-journal-text me-2"></i>
            Edit Fokus Penelitian
        </h2>

        <form action="{{ route('fokuspenelitian.update', $fokus->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $fokus->judul }}" required>
            </div>

            <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control summernote">{{ $fokus->deskripsi }}</textarea>
            </div>

            <div class="mb-3">
            <label>Gambar Saat Ini</label><br>
            <img src="{{ asset('assets/imgbr/'.$fokus->gambar) }}" width="100" class="mb-2"><br>
            <input type="file" name="gambar" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('fokuspenelitian.view') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
