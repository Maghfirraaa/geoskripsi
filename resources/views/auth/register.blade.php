<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register BJNDiscover</title>
    <link rel="icon" href="{{ asset('style/images/logo5.png') }}" type = "image/x-icon">
    <link rel="stylesheet" href="{{ asset('style/assets/css/pages/auth.css')}}" >
    <link rel="stylesheet" href="{{ asset('style/assets/css/main/app.css')}}" >
    <link rel="stylesheet" href="{{ asset('style/assets/css/main/app-dark.css')}}" >
    <link rel="shortcut icons" href="{{ asset('style/assets/images/logo/')}}" type="image/png">
    <link rel="stylesheet" href="{{ asset('style/assets/css/images/bootstrap-icons.svg')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/shared/iconly.css')}}" >
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
            <h1 class="auth-title">Daftar Akun</h1>
            <p class="auth-subtitle mb-3">Masukkan datamu untuk mendaftar ke website ini!</p>

            {{-- @if ($errors->any())
            @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p> 
            @endforeach
            @endif --}}

            <form action="{{route('create')}}">
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" name="name" placeholder="Username" required>
                    @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
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
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" name="password_confirmation" placeholder="Confirm Password" required>
                    @error('password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <button class="btn custom-btn btn-block btn-lg shadow-lg mt-3">Daftar</button>
            </form>
            <div class="text-center mt-3 text-lg fs-4">
                <p class='text-gray-600'>Sudah Punya Akun? <a href="{{route('login')}}" class="font-bold custom-text-btn"> Masuk</a>.</p>
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