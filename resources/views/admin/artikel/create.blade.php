@extends('layouts_admin.admin_logistik')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/form-style.css') }}">

<div class="container">
    <div class="form-card">
        <h2><i class="bi bi-journal-text me-2"></i>
            Tambah Data Admin
        </h2>
        <form action="{{ route('dashboard.store') }}" method="POST">
            @csrf
            <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
            </div>
            {{-- ID Role disembunyikan dan default 1 --}}
            <input type="hidden" name="id_role" value="1">
            <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
