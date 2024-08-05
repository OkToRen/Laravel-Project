@extends('nav')

@section('content')
<style>
    .background {
        background: url('assets/register_bg.jpg') no-repeat center center fixed;
        background-size: cover;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .form-wrapper {
        display: flex;
        align-items: stretch;
        max-width: 1000px; /* Maximum width of the container */
        width: 100%;
    }
    .form-container {
        flex: 1;
        background-color: #333;
        border-radius: 0.5rem;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        max-width: 400px; /* Width of the form container */
    }
    .form-container h1 {
        font-size: 1.5rem; /* Adjust font size for form heading */
    }
    .form-container .form-control {
        border-radius: 0.25rem;
        border: 1px solid #444;
    }
    .form-container .btn {
        font-size: 1rem;
    }
    .form-container a {
        font-size: 0.875rem;
    }
    .logo-container {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #333; /* Same background color as form */
        border-radius: 0.5rem;
    }
    .logo-img {
        max-height: 100%; /* Ensures the logo fits the height of the container */
        width: auto; /* Maintains aspect ratio */
    }
    .content-wrapper {
        display: flex;
        gap: 20px; /* Space between form and image */
    }
</style>
<div class="background">
    <div class="container">
        <div class="form-wrapper">
            <div class="form-container">
                <h1 class="text-3xl text-white font-bold text-center">Sign in</h1>
                <form action="/loginUser" method="POST" class="d-flex flex-column gap-4">
                    <input type="hidden" name="_token" value="LnCEl2XE1v8dfY67Om7qkJKVTQbKGV6a4mAkJMCq">
                    <div class="d-flex flex-column gap-4">
                        <div class="d-flex flex-column">
                            <label for="email" class="text-primary fw-semibold">SIGN IN WITH EMAIL</label>
                            <input type="email" name="email" id="email" class="form-control field-bg text-white">
                        </div>
                        <div class="d-flex flex-column">
                            <label for="password" class="text-secondary">PASSWORD</label>
                            <input type="password" name="password" id="password" class="form-control field-bg text-white">
                        </div>
                        <div class="d-flex align-items-center">
                            <input id="default-checkbox" type="checkbox" class="form-check-input me-2" name="remember">
                            <label for="default-checkbox" class="form-check-label">
                                Remember Me
                            </label>
                        </div>
                        <button type="submit" class="btn blue-btn w-100 py-2">Sign In</button>
                        <a class="text-secondary text-decoration-none d-block text-center mt-2" href="https://narcore.apps.binus.ac.id/forgot-password">Forgot Password?</a>
                    </div>
                </form>
            </div>
            <div class="logo-container">
                <img src="{{ asset('assets/Steam_logo.png') }}" alt="Logo" class="logo-img img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection
