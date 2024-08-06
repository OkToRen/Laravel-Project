@extends('nav')

@section('content')

<body>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            overflow-y: auto;
        }
        .background {
            background: url('{{ asset('assets/register_bg.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            height: 90%;
            display: flex;
            align-items: center;
            justify-content: center;
            /* position: fixed; */
        }
        .form-container {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 2rem;
            border-radius: 0.5rem;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        .form-container h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #f1f1f1;
        }
        .form-container .form-label {
            color: #ddd;
        }
        .form-container .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .form-container .btn-primary:hover {
            background-color: #0056b3;
        }
        .form-container .form-check-label {
            color: #ddd;
        }
    </style>
    <div class="background">
        {{-- <img src="{{ asset('assets/register_bg.jpg') }}" alt="" class="">  --}}
        <div class="form-container">
            <form action="{{ route('registerUser') }}" method="POST">
                @csrf
                <h1>Create Your Account</h1>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                    @error('email')
                        <p style="color: red;">You already have an account registered</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                    @error('password')
                        <p style="color: red;">Please enter a valid password</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="confirm-password" class="form-label">Confirm Password</label>
                    <input type="password" name="confirm-password" id="confirm-password" class="form-control" required>
                    @error('confirm-password')
                        <p style="color: red;">Confirm password have to be the same as password</p>
                    @enderror
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="default-checkbox" name="agreement" required>
                    <label class="form-check-label" for="default-checkbox">I am 13 years of age or older and agree to the terms of the Steam Subscriber Agreement and the Valve Privacy Policy.</label>
                </div>

                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
        </div>
    </div>
</body>

@endsection
