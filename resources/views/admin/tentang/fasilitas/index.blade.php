@extends('layouts_admin.admin_logistik')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/adminview.css') }}">

<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Daftar Fasilitas</h2>
        <div class="d-flex gap-2">
            <a href="{{ route('fasilitas.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle me-1"></i> Tambah Data
            </a>
            <a href="{{ route('fasilitas.content') }}" class="btn btn-info text-white" target="_blank">
                <i class="bi bi-eye me-1"></i> Lihat Web
            </a>
        </div>
    </div>

    {{-- Form pencarian --}}
    <form action="{{ route('fasilitas.view') }}" method="GET" class="mb-3 d-flex" style="max-width: 350px;">
        <input type="text" name="search" class="form-control me-2" placeholder="Cari nama instansi..."
               value="{{ request('search') }}">
        <button type="submit" class="btn btn-secondary">Cari</button>
    </form>

    {{-- Pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Tabel data --}}
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th style="width: 20%">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @if($fasilitas->count() > 0)
            @foreach($fasilitas as $index => $item)
            <tr>
                <td>{{ $fasilitas->firstItem() + $index }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ Str::limit(strip_tags($item->deskripsi), 80, '...') }}</td>
                <td>
                    <img src="{{ asset('assets/imgfasilitas/'.$item->gambar) }}" width="70" alt="Logo Fasilitas">
                </td>
                <td>
                    <a href="{{ route('fasilitas.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('fasilitas.destroy', $item->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5" class="text-center text-muted">Belum ada data fasilitas kerjasama.</td>
            </tr>
        @endif
        </tbody>
    </table>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center">
        {{ $fasilitas->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
