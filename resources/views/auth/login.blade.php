@extends('layouts_admin.login.layout_login')

@section('content')

  <div class="col-md-5 col-lg-4">
    <div class="card login-card">
      <div class="login-header">
        <h4>SISTEM SIKRAMA</h4>
        <p class="mb-0">Silakan masuk untuk melanjutkan</p>
      </div>
      <div class="card-body p-4">

        @if ($errors->any())
          <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif

        <form action="{{ route('login.post') }}" method="post">
          @csrf

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" type="email" class="form-control" value="{{ old('email') }}" required autofocus>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" name="password" type="password" class="form-control" required>
          </div>

          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Ingat saya</label>
          </div>

          <button type="submit" class="btn btn-login w-100">Login</button>
        </form>

      </div>
    </div>
  </div>

@endsection
