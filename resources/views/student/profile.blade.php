@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header -->
    <div class="bg-white shadow-lg rounded-lg p-6 mb-8 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <svg class="h-10 w-10 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
            <h3 class="text-2xl font-semibold text-gray-800 text-center lg:text-left">My Profile</h3>
        </div>
        <a href="{{ route('profile.edit') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition text-sm">
            Edit Profile
        </a>
    </div>

    <!-- Profile Details -->
    <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
        <div class="grid gap-6 sm:grid-cols-2">
            <!-- Profile Photo -->
            <div class="flex justify-center sm:justify-start">
                <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-gray-200">
                    @if ($user->profile_photo_path)
                        <img src="{{ asset($user->profile_photo_path) }}" alt="Profile Photo" class="w-full h-full object-cover">
                    @else
                        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                            <svg class="h-16 w-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                    @endif
                </div>
            </div>

            <!-- User Details -->
            <div class="grid gap-4">
                <div>
                    <h5 class="text-lg font-semibold text-gray-700">Full Name</h5>
                    <p class="text-gray-600">{{ $user->firstname }} {{ $user->lastname }}</p>
                </div>
                <div>
                    <h5 class="text-lg font-semibold text-gray-700">Username</h5>
                    <p class="text-gray-600">{{ $user->username ?? 'Not set' }}</p>
                </div>
                <div>
                    <h5 class="text-lg font-semibold text-gray-700">Email</h5>
                    <p class="text-gray-600">{{ $user->email }}</p>
                </div>
                <div>
                    <h5 class="text-lg font-semibold text-gray-700">Email Verification</h5>
                    <span class="inline-flex items-center px-3 py-1 text-sm font-medium rounded-full
                                {{ $user->email_verified_at ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                        {{ $user->email_verified_at ? 'Verified' : 'Unverified' }}
                    </span>
                </div>
                <div>
                    <h5 class="text-lg font-semibold text-gray-700">Gender</h5>
                    <p class="text-gray-600">{{ ucfirst($user->gender) }}</p>
                </div>
                <div>
                    <h5 class="text-lg font-semibold text-gray-700">Account Created</h5>
                    <p class="text-gray-600">{{ \Carbon\Carbon::parse($user->created_at)->format('m/d/Y, g:i A') }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Actions -->
    <div class="bg-white shadow-lg rounded-lg p-6">
        <h4 class="text-xl font-semibold text-gray-800 mb-4">Account Actions</h4>
        <div class="flex flex-col sm:flex-row gap-4">
            <a href="{{ route('password.change') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition text-sm">
                Change Password
            </a>
        </div>
    </div>
</main>
@endsection

@section('scripts')
@endsection
