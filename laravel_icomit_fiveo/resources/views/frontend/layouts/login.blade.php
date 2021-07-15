<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Login - icomit</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/login/assets/css/login.css') }}">
</head>

<body>

    {{-- TAMPILKAN NOTIF JIKA GAGAL LOGIN --}}
    @if (session('erorr'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="{{ asset('frontend/login/assets/images/login.png') }}" alt="login"
                            class="login-card-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            {{-- <div class="brand-wrapper">
                                <img src="{{ asset('frontend/login/assets/images/logo-ti.png') }}" alt="logo"
                                    class="logo">
                            </div> --}}
                            <p class="login-card-description">Form Login</p>
                            <form method="POST" action="{{ route('postlogin') }}">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email/Username</label>

                                    {{-- MODIFIKASI BAGIAN EMAIL DAN USERNAME --}}
                                    <input id="username" type="text" placeholder="Username/Email"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="Password">
                                </div>
                                <button class="btn btn-block login-btn mb-4" type="submit">Login</button>
                            </form>
                            <p class="login-card-footer-text">Belum punya akun? <a href="{{ url('register') }}"
                                    class="text-reset">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
