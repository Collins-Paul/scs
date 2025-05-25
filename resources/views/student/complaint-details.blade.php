@extends('layouts.app')

@section('title', 'Complaint Details')

@section('content')
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header -->
    <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
        <h3 class="text-2xl font-semibold text-gray-800 text-center lg:text-left">Complaint Details</h3>
    </div>

    <!-- Complaint Details Card -->
    <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
        <div class="grid gap-4">
            <!-- Title and Status -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <h4 class="text-xl font-medium text-gray-800">{{ $complaint->title }}</h4>
                <div class="flex items-center space-x-4 mt-2 sm:mt-0">
                    <span class="inline-flex items-center px-3 py-1 text-sm font-medium rounded-full text-white
                                {{ $complaint->status === 'pending' ? 'bg-yellow-500' : ($complaint->status === 'resolved' ? 'bg-green-500' : 'bg-gray-500') }}">
                        <span class="w-2 h-2 mr-2 bg-white rounded-full animate-ping"></span>
                        {{ ucfirst($complaint->status) }}
                    </span>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-sm font-medium
                                {{ $complaint->priority === 'low' ? 'bg-blue-100 text-blue-800' : ($complaint->priority === 'medium' ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800') }}">
                        Priority: {{ ucfirst($complaint->priority) }}
                    </span>
                </div>
            </div>

            <!-- Description -->
            <div>
                <h5 class="text-lg font-semibold text-gray-700">Description</h5>
                <p class="mt-2 text-gray-600">{{ $complaint->description }}</p>
            </div>

            <!-- Metadata -->
            <div class="grid sm:grid-cols-2 gap-4">
                <div>
                    <h5 class="text-lg font-semibold text-gray-700">Submitted By</h5>
                    <p class="mt-2 text-gray-600">{{ $complaint->user ? $complaint->user->name : 'N/A' }}</p>
                </div>
                <div>
                    <h5 class="text-lg font-semibold text-gray-700">Submitted On</h5>
                    <p class="mt-2 text-gray-600">{{ \Carbon\Carbon::parse($complaint->created_at)->format('m/d/Y, g:i A') }}</p>
                </div>
                @if ($complaint->attachment)
                    <div>
                        <h5 class="text-lg font-semibold text-gray-700">Attachment</h5>
                        <p class="mt-2 text-gray-600">
                            <a href="{{ asset($complaint->attachment) }}" class="text-blue-600 hover:underline flex items-center" target="_blank">
                                <svg class="inline-block w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 002.828 2.828l6.586-6.586A4 4 0 0015.172 7m-9.172 8a6 6 0 018.485-8.485l6.586 6.586a8 8 0 01-11.314 11.314L3.828 15"></path>
                                </svg>
                                View Attachment
                            </a>
                        </p>
                    </div>
                @endif
            </div>

            <!-- Resolution Details -->
            @if ($complaint->status === 'resolved' || $complaint->status === 'closed')
                <div class="border-t pt-4 mt-4">
                    <h5 class="text-lg font-semibold text-gray-700">Resolution Details</h5>
                    <div class="grid sm:grid-cols-2 gap-4 mt-2">
                        <div>
                            <h6 class="text-sm font-medium text-gray-600">Resolution</h6>
                            <p class="text-gray-600">{{ $complaint->resolution ?? 'No resolution provided' }}</p>
                        </div>
                        <div>
                            <h6 class="text-sm font-medium text-gray-600">Resolved By</h6>
                            <p class="text-gray-600">{{ $complaint->resolvedBy ? $complaint->resolvedBy->name : 'N/A' }}</p>
                        </div>
                        <div>
                            <h6 class="text-sm font-medium text-gray-600">Resolved On</h6>
                            <p class="text-gray-600">{{ $complaint->resolved_at ? \Carbon\Carbon::parse($complaint->resolved_at)->format('m/d/Y, g:i A') : 'N/A' }}</p>
                        </div>
                        @if ($complaint->status === 'closed')
                            <div>
                                <h6 class="text-sm font-medium text-gray-600">Closed By</h6>
                                <p class="text-gray-600">{{ $complaint->closedBy ? $complaint->closedBy->name : 'N/A' }}</p>
                            </div>
                            <div>
                                <h6 class="text-sm font-medium text-gray-600">Closed On</h6>
                                <p class="text-gray-600">{{ $complaint->closed_at ? \Carbon\Carbon::parse($complaint->closed_at)->format('m/d/Y, g:i A') : 'N/A' }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>

    <!-- Complaint Responses -->
    @if ($complaint->complaintsResponses->isNotEmpty())
        <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
            <h4 class="text-xl font-semibold text-gray-800 mb-4">Responses</h4>
            <div class="grid gap-4">
                @foreach ($complaint->complaintsResponses as $response)
                    <div class="border-l-4 border-blue-500 pl-4">
                        <div class="flex items-center justify-between">
                            <p class="text-gray-600">{{ $response->response }}</p>
                            <span class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($response->created_at)->format('m/d/Y, g:i A') }}</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">By: {{ $response->user ? $response->user->name : 'N/A' }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <!-- Feedback and Ratings -->
    @if ($complaint->feedback->isNotEmpty())
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h4 class="text-xl font-semibold text-gray-800 mb-4">Feedback & Ratings</h4>
            <div class="grid gap-6">
                @foreach ($complaint->feedback as $feedback)
                    <div class="border rounded-lg p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <span class="inline-flex items-center px-3 py-1 text-sm font-medium rounded-full text-white
                                            {{ $feedback->status === 'pending' ? 'bg-yellow-500' : ($feedback->status === 'resolved' ? 'bg-green-500' : 'bg-gray-500') }}">
                                    {{ ucfirst($feedback->status) }}
                                </span>
                                <p class="text-gray-600">{{ $feedback->comment }}</p>
                            </div>
                            <span class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($feedback->created_at)->format('m/d/Y, g:i A') }}</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">By: {{ $feedback->user ? $feedback->user->name : 'N/A' }}</p>
                        @if ($feedback->attachment)
                            <p class="text-sm text-gray-600 mt-2">
                                <a href="{{ asset($feedback->attachment) }}" class="text-blue-600 hover:underline flex items-center" target="_blank">
                                    <svg class="inline-block w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 002.828 2.828l6.586-6.586A4 4 0 0015.172 7m-9.172 8a6 6 0 018.485-8.485l6.586 6.586a8 8 0 01-11.314 11.314L3.828 15"></path>
                                    </svg>
                                    View Feedback Attachment
                                </a>
                            </p>
                        @endif

                        <!-- Ratings for this Feedback -->
                        @if ($feedback->ratings->isNotEmpty())
                            <div class="mt-4">
                                <h6 class="text-sm font-medium text-gray-600">Ratings</h6>
                                <div class="grid gap-2 mt-2">
                                    @foreach ($feedback->ratings as $rating)
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2">
                                                <span class="text-yellow-400">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        <svg class="inline-block w-4 h-4" fill="{{ $i <= $rating->rating ? 'currentColor' : 'none' }}" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.783-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                                        </svg>
                                                    @endfor
                                                </span>
                                                <p class="text-gray-600">{{ $rating->comment ?? 'No comment provided' }}</p>
                                            </div>
                                            <p class="text-sm text-gray-500">By: {{ $rating->user ? $rating->user->name : 'N/A' }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="bg-gray-100 rounded-lg p-6 text-center">
            <p class="text-gray-600 text-lg">No feedback or ratings available for this complaint.</p>
        </div>
    @endif

    <!-- Back Button -->
    <div class="mt-8">
        <a href="{{ route('complaints') }}" class="inline-block bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">Back to Complaints</a>
    </div>
</main>
@endsection

@section('scripts')
@endsection
