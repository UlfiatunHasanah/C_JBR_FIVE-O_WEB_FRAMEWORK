<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Register - icomit</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/login/assets/css/login.css') }}">
</head>

<body>
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
                                <img src="{{ asset('frontend/login/assets/images/logo.svg') }}" alt="logo"
                                    class="logo">
                            </div> --}}
                            <p class="login-card-description">Form Register</p>
                            <form method="POST" action="{{ route('saveregister') }}">
                                {!! csrf_field() !!}
                                <div class="form-group mb-1">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Alamat Email">
                                </div>
                                <div class="form-group mb-1">
                                    <label for="username" class="sr-only">Username</label>
                                    <input type="text" name="username" id="username" class="form-control"
                                        placeholder="Username">
                                </div>
                                <div class="form-group mb-1">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="Password">
                                </div>
                                <div class="form-group mb-1">
                                    <label for="level" class="sr-only">Level</label>
                                    <select class="form-control" name="level" id="level"
                                        placeholder="Level" required>
                                        <option value="adminkom">Admin Komunitas</option>
                                    </select>
                                </div>
                                <button class="btn btn-block login-btn mb-4" type="submit">Register</button>
                            </form>
                            <p class="login-card-footer-text">Sudah punya akun? <a href="{{ url('login') }}"
                                    class="text-reset">Login</a></p>
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
