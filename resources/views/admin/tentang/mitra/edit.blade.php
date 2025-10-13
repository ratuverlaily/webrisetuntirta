@extends('layouts_admin.admin_logistik')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/form-style.css') }}">

<div class="container">
    <div class="form-card">
        <h2><i class="bi bi-journal-text me-2"></i>
            Edit Mitra Kerjasama
        </h2>

        <form action="{{ route('mitrakerjasama.update', $mitra->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
            <label>Nama Instansi</label>
            <input type="text" name="nama_instansi" class="form-control" value="{{ $mitra->nama_instansi }}" required>
            </div>

            <div class="mb-3">
            <label>logo Instansi</label><br>
            <img src="{{ asset('assets/imgmitra/'.$mitra->foto_logo) }}" width="100" class="mb-2"><br>
            <input type="file" name="foto_logo" class="form-control">
            </div>

            <div class="mb-3">
            <label>Link Website</label>
            <textarea name="link_website" class="form-control summernote">{{ $mitra->link_website }}</textarea>
            </div>

            <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control summernote">{{ $mitra->deskripsi }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('mitrakerjasama.view') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
