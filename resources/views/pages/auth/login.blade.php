<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inventaris | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('templates/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('templates/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('templates/dist/css/adminlte.min.css') }}">

  <style>
    body {
      background: linear-gradient(135deg, #667eea, #764ba2);
    }

    .login-box {
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
    }

    .login-card-body {
      background-color: #f9f9f9;
      border-radius: 8px;
    }

    .login-logo a {
      font-weight: 700;
      color: #4a4a4a;
    }

    .form-control:focus {
      border-color: #5e72e4;
      box-shadow: 0 0 0 0.2rem rgba(94, 114, 228, 0.25);
    }

    .btn-primary {
      background: linear-gradient(to right, #4f46e5, #3b82f6);
      border: none;
    }

    .btn-primary:hover {
      background: linear-gradient(to right, #4338ca, #2563eb);
    }

    .card-outline.card-primary {
      border-top: 3px solid #4f46e5;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Inventaris</b><span style="color:#4f46e5;">App</span></a>
    </div>
    <div class="card-body login-card-body">
      <p class="login-box-msg text-muted font-weight-bold">🔐 Masuk untuk memulai aplikasi</p>

      <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text bg-white">
              <span class="fas fa-envelope text-primary"></span>
            </div>
          </div>
          @error('email')
          <span class="invalid-feedback d-block mt-1" role="alert"><strong>{{ $message }}</strong></span>
          @enderror
        </div>

        <div class="input-group mb-4">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text bg-white">
              <span class="fas fa-lock text-primary"></span>
            </div>
          </div>
          @error('password')
          <span class="invalid-feedback d-block mt-1" role="alert"><strong>{{ $message }}</strong></span>
          @enderror
        </div>

        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block font-weight-bold shadow">🚀 Masuk</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
