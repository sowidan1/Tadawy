<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #0dbb8f; /* Change background color to blue */
            margin: 0;
        }
        .auth-container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: #0dbb8f;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <div>
            <a href="/">
                <img src="https://tadawy-production.up.railway.app/assets/img/icons/unicons/logo.png" class="w-40 h-40 fill-current text-gray-500" />
            </a>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="mb-3 form-check">
                <input id="remember_me" class="form-check-input" type="checkbox" name="remember">
                <label class="form-check-label" for="remember_me">Remember me</label>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Log in</button>
            </div>
        </form>
    </div>
</body>
</html>
