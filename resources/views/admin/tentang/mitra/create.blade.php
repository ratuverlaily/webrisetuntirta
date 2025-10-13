@extends('layouts_admin.admin_logistik')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/form-style.css') }}">

<div class="container">
    <div class="form-card">
        <h2><i class="bi bi-journal-text me-2"></i>
            Tambah Mitra Kerjasama
        </h2>

        <form action="{{ route('mitrakerjasama.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
            <label>Nama Instansi</label>
            <input type="text" name="nama_instansi" class="form-control" required>
            </div>

            <div class="mb-3">
            <label>logo Instansi</label>
            <input type="file" name="foto_logo" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Link Web Instansi</label>
                <textarea name="link_website" class="form-control summernote"></textarea>
            </div>

            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control summernote"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('mitrakerjasama.view') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
