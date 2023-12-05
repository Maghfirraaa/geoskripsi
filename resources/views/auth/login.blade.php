<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login BJNDiscover</title>
    <link rel="stylesheet" href="{{ asset('style/assets/css/pages/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/main/app-dark.css') }}">
    <link rel="icon" href="{{ asset('style/images/logo5.png') }}" type = "image/x-icon">
    <link rel="stylesheet" href="{{ asset('style/assets/css/shared/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/shared/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/shared/flag-icon.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href=""><img src="{{ asset('style/images/logo/logo3.png') }}" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Masuk</h1>
                    <p class="auth-subtitle mb-5">Akses Akun dengan Data Pendaftaran Anda !</p>

                    <form action="{{route('postlogin')}}">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-2">
                            <input type="text" class="form-control form-control-xl" name="email" placeholder="Email" required>
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="password" placeholder="Password" required>
                            @error('password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                    
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Biarkan tetap masuk
                            </label>
                        </div>
                        <button class="btn custom-btn btn-block btn-lg shadow-lg mt-5">Masuk</button>
                    </form>
                    <div class="text-center mt-2 text-lg fs-4">
                        <p class="text-gray-600">Belum Punya Akun?<a href="{{route('register')}}" class="font-bold custom-text-btn"> Daftar</a>.</p>
                        {{-- <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                </div>
            </div>
        </div>

    </div>
</body>

</html>
