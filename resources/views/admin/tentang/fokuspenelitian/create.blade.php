@extends('layouts_admin.admin_logistik')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/form-style.css') }}">

<div class="container">
    <div class="form-card">
        <h2><i class="bi bi-journal-text me-2"></i>
            Tambah Fokus Penelitian
        </h2>

        <form action="{{ route('fokuspenelitian.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
            </div>

            <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control summernote"></textarea>
            </div>

            <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('fokuspenelitian.view') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
