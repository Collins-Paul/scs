@extends('layouts.app')

@section('title', 'Complaints')

@section('content')
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
        <h3 class="text-2xl font-semibold text-gray-800 text-center lg:text-left">My Complaints</h3>
    </div>

    @if ($complaints->isEmpty())
        <div class="bg-gray-100 rounded-lg p-6 text-center">
            <div class="flex justify-center">
                <img class="w-[150px]" src="{{ asset('assets/complaints-icon.webp') }}" alt="">
            </div>
            <p class="text-gray-600 text-lg">You haven't submitted any complaints yet.</p>
            <a href="{{ route('student.complaints.create') }}" class="mt-4 inline-block bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary-dark transition">File a New Complaint</a>
        </div>
    @else
        <div class="grid gap-6 lg:gap-8">
            @foreach ($complaints as $complaint)
                <a wire:navigate href="{{ route('student.complaints.show', $complaint->id) }}" class="relative bg-white hover:bg-green-50 p-4 sm:p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-200" aria-label="View complaint: {{ $complaint->title }}">
                    <div class="absolute top-0 right-0 -mt-3 -mr-3 px-3 py-1 text-sm font-medium rounded-full text-white
                                {{ $complaint->status === 'pending' ? 'bg-yellow-500' : ($complaint->status === 'resolved' ? 'bg-green-500' : 'bg-gray-500') }}">
                        {{ \Carbon\Carbon::parse($complaint->created_at)->format('m/d/Y, g:i A') }}
                    </div>
                    <div class="absolute top-0 left-0 -mt-3 ml-3 flex items-center px-3 py-1 text-xs font-medium rounded-full text-white
                                {{ $complaint->status === 'pending' ? 'bg-yellow-500' : ($complaint->status === 'resolved' ? 'bg-green-500' : 'bg-gray-500') }}">
                        <span class="w-2 h-2 mr-2 bg-white rounded-full animate-ping"></span>
                        {{ ucfirst($complaint->status) }}
                    </div>
                    <div class="mt-6">
                        <h3 class="text-xl font-medium text-gray-800">{{ $complaint->title }}</h3>
                        <p class="mt-2 text-gray-600 line-clamp-3">{{ $complaint->description }}</p>
                        <div class="mt-3 flex items-center space-x-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                        {{ $complaint->priority === 'low' ? 'bg-blue-100 text-blue-800' : ($complaint->priority === 'medium' ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800') }}">
                                Priority: {{ ucfirst($complaint->priority) }}
                            </span>
                            @if ($complaint->attachment)
                                <span class="text-gray-500 text-sm">
                                    <svg class="inline-block w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 002.828 2.828l6.586-6.586A4 4 0 0015.172 7m-9.172 8a6 6 0 018.485-8.485l6.586 6.586a8 8 0 01-11.314 11.314L3.828 15"></path>
                                    </svg>
                                    Attachment
                                </span>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="mt-6">
            {{ $complaints->links() }}
        </div>
    @endif
</main>

@endsection

@section('scripts')

@endsection
