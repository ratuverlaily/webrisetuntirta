@extends('layouts_admin.admin_logistik')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/adminview.css') }}">

<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Daftar Fokus Penelitian</h2>
        <div class="d-flex gap-2">
            <a href="{{ route('fokuspenelitian.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle me-1"></i> Tambah Data
            </a>
            <a href="{{ route('fokuspenelitian.content') }}" class="btn btn-info text-white" target="_blank">
                <i class="bi bi-eye me-1"></i> Lihat Web
            </a>
        </div>
    </div>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Gambar</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    @if($fokusPenelitian->count() > 0)
      @foreach($fokusPenelitian as $index => $item)
      <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $item->judul }}</td>
        <td>{{ Str::limit(strip_tags($item->deskripsi), 80, '...') }}</td>
        <td><img src="{{ asset('assets/imgbr/'.$item->gambar) }}" width="70"></td>
        <td>
          {{-- <a href="{{ route('fokuspenelitian.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a> --}}
          <a href="{{ route('fokuspenelitian.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
          <form action="{{ route('fokuspenelitian.destroy', $item->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger btn-sm">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    @else
      <tr>
        <td colspan="5" class="text-center text-muted">Belum ada data fokus penelitian.</td>
      </tr>
    @endif
    </tbody>
  </table>

</div>
@endsection
