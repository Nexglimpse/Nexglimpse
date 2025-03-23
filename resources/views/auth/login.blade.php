@extends('layouts.auth')

@section('content')
    <div class="page page-center min-vh-100 d-flex flex-column justify-content-center">
        <div class="container py-4">
            <div class="text-center mb-5">
                <a href="." class="navbar-brand">
                    {{-- <img src="" alt="logo" class="navbar-brand-image" style="width: 150px;"> --}}
                </a>
            </div>
            <div class="card shadow-sm border-0 mx-auto" style="max-width: 450px;">
                <div class="card-body p-4">
                    <h2 class="h2 text-center mb-3">Welcome Back</h2>
                    <p class="text-center text-muted mb-3">Sign in to continue to your dashboard.</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input id="email" type="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   name="email" value="{{ old('email') }}" 
                                   required autocomplete="email" autofocus 
                                   placeholder="Enter your email">

                            @error('email')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input id="password" type="password" 
                                       class="form-control @error('password') is-invalid @enderror" 
                                       name="password" required autocomplete="current-password" 
                                       placeholder="Enter your password">
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                    <i class="bi bi-eye" id="toggleIcon"></i>
                                </button>
                            </div>
                            @error('password')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>

                        <div class="mb-2 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input type="checkbox" id="remember" class="form-check-input">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            <a href="" class="text-decoration-none">Forgot password?</a>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Log in</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center mt-3">
                <p class="text-secondary">Don't have an account? <a href="{{ route('register') }}" class="text-primary">Signup here</a></p>
            </div>
        </div>
    </div>
@endsection