@extends('layouts_admin.admin_logistik')

@section('content')
<!-- Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('assets/css/form-style.css') }}">

<div class="container">
  <div class="form-card">
    <h2><i class="bi bi-journal-text me-2"></i>
      {{ isset($roadmap) ? 'Edit Radmap' : 'Tambah Postingan Roadmap' }}
    </h2>

    @if(session('success'))
      <div class="alert alert-success shadow-sm">{{ session('success') }}</div>
    @endif

    @if($errors->any())
      <div class="alert alert-danger shadow-sm">
        <ul style="margin:0; padding-left: 18px;">
          @foreach($errors->all() as $err)
            <li>{{ $err }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    {{-- Jika data sudah ada, gunakan form update --}}
    <form
      action="{{ isset($roadmap) ? route('roadmap.update', $roadmap->id) : route('roadmap.store') }}"
      method="POST">

      @csrf
      @if(isset($roadmap))
        @method('PUT')
      @endif

      <div class="form-group mb-3">
        <label for="title">Judul Postingan</label>
        <input type="text" name="title" id="title"
               value="{{ old('title', $roadmap->title ?? '') }}"
               class="form-control" placeholder="Masukkan judul blog...">
      </div>

      <div class="form-group mb-3">
        <label for="content">Konten</label>
        <textarea id="summernote" name="content">{{ old('content', $roadmap->content ?? '') }}</textarea>
      </div>

      <div class="mt-4 d-flex gap-2">
        <button type="submit" class="btn btn-primary">
          <i class="bi {{ isset($roadmap) ? 'bi-pencil-square' : 'bi-save' }} me-1"></i>
          {{ isset($roadmap) ? 'Update' : 'Simpan' }}
        </button>
        <!-- Tombol Lihat -->
        <a href="{{ route('roadmap.content') }}" class="btn btn-info text-white"
        target="_blank" rel="noopener noreferrer">
            <i class="bi bi-eye me-1"></i> Lihat Web
        </a>
      </div>
    </form>
  </div>
</div>

<!-- JS Libraries -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<script>
  $(document).ready(function() {
    $('#summernote').summernote({
      placeholder: 'Tulis konten blog di sini...',
      tabsize: 2,
      height: 320,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'strikethrough', 'clear']],
        ['fontname', ['fontname']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['insert', ['link', 'picture', 'video', 'table', 'hr']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  });
</script>
@endsection
