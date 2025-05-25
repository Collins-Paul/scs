@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <div class="mt-[100px] lg:mt-5">
        <div class="px-2 lg:flex lg:justify-center lg:items-center xl:h-screen">    
            <div class="bg-primary p-8 rounded-tl-lg rounded-tr-lg lg:rounded-tr-none lg:rounded-tl-lg lg:rounded-bl-lg shadow-lg md:mx-auto lg:mx-0 mt-8 lg:w-[25%] md:w-[60%] w-[100%] animate-bounce-custom">
                <h1 class="text-white text-2xl font-semibold">Complaints System</h1>
                <p class="text-white text-sm mt-2">Register to get started!</p>
            </div>

            <!-- Start Page Content here -->
            <div class="bg-white p-8 rounded-lg shadow-lg md:mx-auto lg:mx-0 mb-8 lg:w-[50%] md:w-[60%] w-[100%]">
                <form class="grid gap-4" method="POST" action="{{ route('register.store') }}">
                    @csrf

                    <h2 class="text-xl font-bold text-primary text-center hidden lg:block">Create Account</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="grid gap-2">
                            <label for="firstName" class="text-gray-800 text-sm font-medium inline-block mb-2">First Name</label>
                            <input type="text" name="firstName" class="form-input border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded-lg @error('firstName') border-red-500 @enderror" value="{{ old('firstName') }}" required>
                            @error('firstName')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="grid gap-2">
                            <label for="lastName" class="font-medium">Last Name</label>
                            <input type="text" name="lastName" class="form-input border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded-lg @error('lastName') border-red-500 @enderror" value="{{ old('lastName') }}" required>
                            @error('lastName')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="grid gap-2">
                            <label for="email" class="font-medium">Email</label>
                            <input type="email" name="email" class="form-input border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="grid gap-2">
                            <label for="phone" class="font-medium">Phone Number</label>
                            <input type="text" name="phone" class="form-input border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded-lg @error('phone') border-red-500 @enderror" value="{{ old('phone') }}" required>
                            @error('phone')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="grid gap-2">
                            <label for="password" class="font-medium">Password</label>
                            <input type="password" name="password" class="form-input border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded-lg @error('password') border-red-500 @enderror" required>
                            @error('password')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="grid gap-2">
                            <label for="password_confirmation" class="font-medium">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-input border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded-lg @error('password_confirmation') border-red-500 @enderror" required>
                            @error('password_confirmation')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-check">
                        <input class="form-checkbox text-green-500 rounded border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 @error('invalidCheck2') border-red-500 @enderror" type="checkbox" value="1" name="invalidCheck2" id="invalidCheck2" required>
                        <label class="ms-1.5" for="invalidCheck2">
                            Agree to <a href="#" class="text-dark hover:text-primary">terms and conditions</a>
                        </label>
                        @error('invalidCheck2')
                            <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn bg-primary text-white">Register</button>

                    <p>Already have an account? <a href="{{ route('login') }}" class="text-dark hover:text-primary">Login</a></p>
                </form>
            </div>
            <!-- End Page content -->
        </div>
    </div>
@endsection