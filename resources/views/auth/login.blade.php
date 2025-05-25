@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="px-2 flex lg:flex-row flex-col-reverse lg:justify-center lg:items-center lg:h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg md:mx-auto lg:mx-0 mb-8 lg:w-[45%] md:w-[60%] w-[100%]">
        <form method="POST" action="{{ route('login.auth') }}" class="grid gap-4" id="loginForm">
            @csrf
            <h2 class="text-xl font-bold text-primary text-center hidden lg:block">Welcome Back!</h2>

            <div class="grid gap-2">
                <label for="email" class="font-medium">Email</label>
                <input type="email" name="email" class="form-input rounded-lg border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300" required>
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="grid gap-2">
                <label for="password" class="font-medium">Password</label>
                <div class="relative">
                    <input type="password" name="password" id="password" class="form-input rounded-lg border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 w-full pr-10" required>
                    <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500 hover:text-gray-700" aria-label="Toggle password visibility">
                        <svg id="eyeIcon" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.5C7.5 4.5 3.75 7.5 2.25 12c1.5 4.5 5.25 7.5 9.75 7.5s8.25-3 9.75-7.5c-1.5-4.5-5.25-7.5-9.75-7.5zm0 12c-2.5 0-4.5-2-4.5-4.5s2-4.5 4.5-4.5 4.5 2 4.5 4.5-2 4.5-4.5 4.5zm0-1.5a3 3 0 100-6 3 3 0 000 6z"></path>
                        </svg>
                        <svg id="eyeOffIcon" class="h-5 w-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm0 0c0 1.5-1.5 3-3 3s-3-1.5-3-3m6 0c0-1.5-1.5-3-3-3s-3 1.5-3 3m-9 0c1.5-3 4.5-6 9-6s7.5 3 9 6c-1.5 3-4.5 6-9 6s-7.5-3-9-6z"></path>
                        </svg>
                    </button>
                </div>
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-check">
                <input class="form-checkbox text-green-500 rounded border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300"
                       type="checkbox" name="remember" id="remember">
                <label class="ms-1.5" for="remember">Remember Me</label>
            </div>

            <button class="btn bg-primary text-white relative flex justify-center items-center" type="submit" id="loginButton">
                <span id="buttonText">Login</span>
                <svg id="preloader" class="animate-spin h-5 w-5 mr-2 text-white hidden" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </button>

            <div class="relative my-4">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-white text-gray-500">Or</span>
                </div>
            </div>

            <a href="{{ route('auth.google') }}" class="btn bg-white text-gray-700 border border-gray-300 hover:bg-gray-100 flex items-center justify-center gap-2">
                <svg class="h-5 w-5" viewBox="0 0 24 24">
                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-1.02.68-2.31 1.08-3.71 1.08-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C4.01 20.07 7.64 23 12 23z" fill="#34A853"/>
                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/>
                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.64 1 4.01 3.93 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                </svg>
                Sign in with Google
            </a>

            <p>Don't have an account? <a href="{{ route('register') }}" class="text-dark hover:text-primary">Register</a></p>
            <p class="text-end"><a href="{{ route('password-reset') }}" class="text-dark hover:text-primary">Forgot Password?</a></p>
        </form>
    </div>

    <div class="bg-primary p-8 rounded-tr-lg rounded-tl-lg lg:rounded-tl-none lg:rounded-br-lg shadow-lg md:mx-auto lg:mx-0 mt-8 lg:w-[25%] md:w-[60%] w-[100%] animate-bounce-custom">
        <h1 class="text-white text-2xl font-semibold">Complaints System</h1>
        <p class="text-white text-sm mt-2">Login to anonymously file complaints</p>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.css">

<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');
        const eyeOffIcon = document.getElementById('eyeOffIcon');
        const isPassword = passwordInput.type === 'password';
        passwordInput.type = isPassword ? 'text' : 'password';
        eyeIcon.classList.toggle('hidden', !isPassword);
        eyeOffIcon.classList.toggle('hidden', isPassword);
    });

    document.getElementById('loginForm').addEventListener('submit', async function (event) {
        event.preventDefault();

        const loginButton = document.getElementById('loginButton');
        const buttonText = document.getElementById('buttonText');
        const preloader = document.getElementById('preloader');
        const form = event.target;

        loginButton.disabled = true;
        buttonText.classList.add('opacity-0');
        preloader.classList.remove('hidden');

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: new FormData(form),
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                }
            });

            const data = await response.json();

            if (response.ok && data.success) {
                Toastify({
                    text: "Login successful!",
                    backgroundColor: "#4CAF50",
                    duration: 3000
                }).showToast();

                window.location.href = data.redirect_url || "{{ route('dashboard') }}";
            } else {
                Toastify({
                    text: data.message || "Invalid credentials",
                    backgroundColor: "#EF4444",
                    duration: 3000
                }).showToast();
            }
        } catch (error) {
            Toastify({
                text: "Something went wrong. Please try again.",
                backgroundColor: "#EF4444",
                duration: 3000
            }).showToast();
        } finally {
            loginButton.disabled = false;
            buttonText.classList.remove('opacity-0');
            preloader.classList.add('hidden');
        }
    });
</script>
@endsection
