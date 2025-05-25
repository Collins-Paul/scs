@extends('layouts.app')

@extends('title', 'Create Complaint')

@section('content')
    <main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white shadow-lg rounded-lg p-6 sm:p-8 lg:p-10">
        <h3 class="text-2xl font-semibold text-gray-800 text-center lg:text-left mb-6">File a New Complaint</h3>

        {{-- Success message --}}
        @if (session('success'))
            <div class="mb-6 p-4 bg-green-100 text-green-800 rounded-lg flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                {{ session('success') }}
                <button wire:click="$refresh" class="ml-auto text-green-800 hover:text-green-600" aria-label="Close success message">×</button>
            </div>
        @endif

        {{-- Error message --}}
        @if ($errorMessage)
            <div class="mb-6 p-4 bg-red-100 text-red-800 rounded-lg flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                {{ $errorMessage }}
                <button wire:click="$set('errorMessage', null)" class="ml-auto text-red-800 hover:text-red-600" aria-label="Close error message">×</button>
            </div>
        @endif

        {{-- Complaint Form --}}
        <form wire:submit.prevent="submit" class="grid gap-6">
            {{-- Title --}}
            <div class="grid gap-2">
                <label for="title" class="font-medium text-gray-700">Title</label>
                <input type="text" id="title" wire:model.live="title" class="form-input rounded-lg border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 w-full">
                @error('title')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Description --}}
            <div class="grid gap-2">
                <label for="description" class="font-medium text-gray-700">Description</label>
                <textarea id="description" wire:model.live="description" rows="5" class="form-input rounded-lg border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 w-full"></textarea>
                @error('description')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Priority --}}
            <div class="grid gap-2">
                <label for="priority" class="font-medium text-gray-700">Priority</label>
                <select id="priority" wire:model.live="priority" class="form-select rounded-lg border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 w-full">
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="high">High</option>
                </select>
                @error('priority')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Attachment --}}
            <div class="grid gap-2">
                <label for="attachment" class="font-medium text-gray-700">Attachment (Optional)</label>
                <input type="file" id="attachment" wire:model="attachment" class="form-input rounded-lg border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 w-full">
                @error('attachment')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Buttons --}}
            <div class="flex justify-between items-center mt-4">
                <a href="{{ route('complaints') }}" class="text-gray-600 hover:text-primary transition">Cancel</a>
                <button type="submit" class="relative bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary-dark transition disabled:opacity-50" wire:loading.attr="disabled">
                    <span wire:loading.remove>Submit Complaint</span>
                    <span wire:loading class="flex items-center">
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
