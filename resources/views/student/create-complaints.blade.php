@extends('layouts.app')

@section('title', 'Create Complaint')

@section('content')
    <main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white shadow-lg rounded-lg p-6 sm:p-8 lg:p-10">
            <h3 class="text-2xl font-semibold text-gray-800 text-center lg:text-left mb-6">File a New Complaint</h3>

            {{-- Success message --}}
            @if (session('success'))
                <div id="success-message" class="mb-6 p-4 bg-green-100 text-green-800 rounded-lg flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    {{ session('success') }}
                    <button class="ml-auto text-green-800 hover:text-green-600 close-message" aria-label="Close success message">×</button>
                </div>
            @endif

            {{-- Error message --}}
            @if (session('error'))
                <div id="error-message" class="mb-6 p-4 bg-red-100 text-red-800 rounded-lg flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    {{ session('error') }}
                    <button class="ml-auto text-red-800 hover:text-red-600 close-message" aria-label="Close error message">×</button>
                </div>
            @endif

            {{-- Complaint Form --}}
            <form id="complaintForm" action="{{ route('complaints.store') }}" method="POST" enctype="multipart/form-data" class="grid gap-6">
                @csrf

                {{-- Title --}}
                <div class="grid gap-2">
                    <label for="title" class="font-medium text-gray-700">Title</label>
                    <input type="text" id="title" name="title" class="form-input rounded-lg border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 w-full" required>
                    <span class="text-red-500 text-sm error-message" id="title-error"></span>
                </div>

                {{-- Description --}}
                <div class="grid gap-2">
                    <label for="description" class="font-medium text-gray-700">Description</label>
                    <textarea id="description" name="description" rows="5" class="form-input rounded-lg border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 w-full" required></textarea>
                    <span class="text-red-500 text-sm error-message" id="description-error"></span>
                </div>

                {{-- Priority --}}
                <div class="grid gap-2">
                    <label for="priority" class="font-medium text-gray-700">Priority</label>
                    <select id="priority" name="priority" class="form-select rounded-lg border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 w-full" required>
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                    </select>
                    <span class="text-red-500 text-sm error-message" id="priority-error"></span>
                </div>

                {{-- Attachment --}}
                <div class="grid gap-2">
                    <label for="attachment" class="font-medium text-gray-700">Attachment (Optional)</label>
                    <input type="file" id="attachment" name="attachment" class="form-input rounded-lg border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 w-full">
                    <span class="text-red-500 text-sm error-message" id="attachment-error"></span>
                </div>

                {{-- Buttons --}}
                <div class="flex justify-between items-center mt-4">
                    <a href="{{ route('complaints') }}" class="text-gray-600 hover:text-primary transition">Cancel</a>
                    <button type="submit" id="submitButton" class="relative bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary-dark transition disabled:opacity-50">
                        <span id="buttonText">Submit Complaint</span>
                        <span id="preloader" class="flex items-center hidden">
                            <svg class="animate-spin h-5 w-5 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Submitting...
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </main>
@endsection
