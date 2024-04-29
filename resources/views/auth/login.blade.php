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
            margin: 0;
        }

        .auth-container {
            max-width: 400px; /* Adjust as needed */
            width: 100%;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Adding shadow */
        }

        .auth-container .app-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .auth-container .logo img {
            height: 40px; /* Adjust height as needed */
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <div class="app-bar">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <div class="title">
                <h2>Tadawy</h2>
            </div>
        </div>

        <h3 class="text-center mb-4">Admin Log In</h3>

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
