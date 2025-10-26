@extends('layouts_admin.admin_logistik')

@section('content')
<div class="container py-4">
  <h3>Edit User</h3>
  <form action="{{ route('dashboard.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label>Nama</label>
      <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
    </div>
    <div class="mb-3">
      <label>Email</label>
      <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
    </div>

    {{-- ID Role disembunyikan dan default 1 --}}
    <input type="hidden" name="id_role" value="1">

    <div class="mb-3">
      <label>Password (Kosongkan jika tidak ingin diubah)</label>
      <input type="password" name="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Kembali</a>
  </form>
</div>
@endsection
