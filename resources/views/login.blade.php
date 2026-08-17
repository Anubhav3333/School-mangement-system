<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">

        <div class="col-md-6 col-lg-4">

            <div class="card shadow border-0">
                <div class="card-body p-4">

                    <h3 class="text-center mb-4">Sign In</h3>

                    {{-- Success message --}}
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- Validation errors --}}
                    @if($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <form action="{{ route('login.store') }}" method="POST">

                        @csrf

                        {{-- Email --}}
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                Email address
                            </label>

                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="form-control"
                                placeholder="Enter your email"
                                value="{{ old('email') }}"
                                required
                            >
                        </div>

                        {{-- Password --}}
                        <div class="mb-3">
                            <label for="password" class="form-label">
                                Password
                            </label>

                            <input
                                type="password"
                                name="password"
                                id="password"
                                class="form-control"
                                placeholder="Enter your password"
                                required
                            >
                        </div>

                      
                        <div class="d-flex justify-content-between align-items-center mb-4">

                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="remember"
                                    id="remember"
                                >

                                <label class="form-check-label" for="remember">
                                    Remember me
                                </label>
                            </div>

                            <a href="#" class="text-decoration-none">
                                Forgot password?
                            </a>

                        </div>

                        {{-- Login button --}}
                        <button type="submit" class="btn btn-primary w-100">
                            Sign In
                        </button>

                    </form>

                   
                    <div class="text-center mt-4">
                        <p class="mb-0">
                            Don't have an account?

                             <a href="{{ url('/register') }}">Register</a>
                             
                                
                            </a>
                        </p>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>

</body>
</html>