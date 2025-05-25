@extends('layouts.app')

@section('title', 'Notifications')

@section('content')
<main class="m-5 py-4">
    <div class="card p-2">
        <div class="flex items-center gap-3 justify-center">
            {{-- <img src="{{ asset('assets/images/custom/bell.png') }}" class="h-[50px] w-[50px]" alt=""> --}}
            <h3 class="font-medium text-2xl text-center lg:text-start">Notifications</h3>
        </div>
    </div>

    <div class="flex-col gap-1 bg-default-100 ">
        <div class="grid gap-5 mt-5">
            <a href="" class="card hover:bg-green-100 p-4 hover:rounded-lg shadow-lg">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/images/custom/bell.png') }}" class="h-[30px] w-[30px]" alt="">
                    <div>
                        <h3 class="font-medium text-xl">Notification Title</h3>
                        <p class="text-default-500">Notification Description</p>
                    </div>
                </div>
            </a>
            <a href="" class="card hover:bg-green-100 p-4 hover:rounded-lg shadow-lg">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/images/custom/bell.png') }}" class="h-[30px] w-[30px]" alt="">
                    <div>
                        <h3 class="font-medium text-xl">Notification Title</h3>
                        <p class="text-default-500">Notification Description</p>
                    </div>
                </div>
            </a>
            <a href="" class="card hover:bg-green-100 p-4 hover:rounded-lg shadow-lg">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/images/custom/bell.png') }}" class="h-[30px] w-[30px]" alt="">
                    <div>
                        <h3 class="font-medium text-xl">Notification Title</h3>
                        <p class="text-default-500">Notification Description</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</main>

@endsection

@section('scripts')

@endsection
