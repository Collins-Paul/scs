@extends('layouts.app')

@section('title', 'Notifications')

@section('content')
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header -->
    <div class="bg-white shadow-lg rounded-lg p-6 mb-8 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <img src="{{ asset('assets/images/custom/bell.png') }}" class="h-10 w-10" alt="Notifications Icon">
            <h3 class="text-2xl font-semibold text-gray-800 text-center lg:text-left">Notifications</h3>
        </div>
        @if ($notifications->isNotEmpty())
            <form action="{{ route('notifications.markAllAsRead') }}" method="POST">
                @csrf
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition text-sm">
                    Mark All as Read
                </button>
            </form>
        @endif
    </div>

    <!-- Notifications List -->
    @if ($notifications->isEmpty())
        <div class="bg-gray-100 rounded-lg p-6 text-center">
            <div class="flex justify-center">
                <img class="w-[150px]" src="{{ asset('assets/images/custom/bell.png') }}" alt="No Notifications">
            </div>
            <p class="text-gray-600 text-lg mt-4">You have no notifications at this time.</p>
        </div>
    @else
        <div class="grid gap-6">
            @foreach ($notifications as $notification)
                <div class="bg-white rounded-lg shadow-md p-4 sm:p-6 hover:shadow-lg transition-all duration-200">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-3">
                                <span class="inline-flex items-center px-3 py-1 text-sm font-medium rounded-full
                                            {{ $notification->read_at ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                    {{ $notification->read_at ? 'Read' : 'Unread' }}
                                </span>
                                <p class="text-gray-800">
                                    {{ is_array($notification->data) && isset($notification->data['message']) ? $notification->data['message'] : 'Notification content not available' }}
                                </p>
                            </div>
                            <p class="text-sm text-gray-500 mt-2">
                                {{ \Carbon\Carbon::parse($notification->created_at)->format('m/d/Y, g:i A') }}
                            </p>
                        </div>
                        @if (!$notification->read_at)
                            <form action="{{ route('notifications.markAsRead', $notification->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                    Mark as Read
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</main>
@endsection

@section('scripts')
@endsection
