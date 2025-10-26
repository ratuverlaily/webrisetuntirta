@extends('layouts_admin.admin_logistik')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/adminview.css') }}">

<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Daftar Artikel Ilmiah</h3>
    <a href="{{ route('dashboard.create') }}" class="btn btn-primary">+ Tambah Artikel</a>
  </div>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <table class="table table-bordered table-striped align-middle">
    <thead class="table-dark">
      <tr>
        <th>#</th>
        <th>Judul</th>
        <th>Link</th>
        <th>Tanggal</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($users as $i => $user)
        <tr>
          <td>{{ $i + 1 }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->id_role == 1 ? 'Admin' : 'User' }}</td>
          <td>
            <a href="{{ route('dashboard.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('dashboard.destroy', $user->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button onclick="return confirm('Hapus user ini?')" class="btn btn-danger btn-sm">Hapus</button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="5" class="text-center">Belum ada data</td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection
