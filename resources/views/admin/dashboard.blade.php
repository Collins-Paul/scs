@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<main class="mx-5">
    <div class="card m-5 p-5">
        <h3 class="font-medium text-2xl text-center lg:text-start">Admin Dashboard</h3>
    </div>

    <div class="">
        <div class="grid lg:grid-cols-3 gap-4">
            <div class="card py-[3rem] flex items-center justify-center">
                <div>
                    <h1 class="!text-[2rem] text-center font-bold">{{ $users }}</h1>
                    <p class="text-[1rem]">Users</p>
                </div>
            </div>

            <div class="card py-[3rem] flex items-center justify-center">
                <div>
                    <h1 class="!text-[2rem] text-center font-bold">{{ $complaints }}</h1>
                    <p class="text-[1rem]">Complaints</p>
                </div>
            </div>

            <div class="card py-[3rem] flex items-center justify-center">
                <div>
                    <h1 class="!text-[2rem] text-center font-bold">{{ $resolvedComplaints }}</h1>
                    <p class="text-[1rem]">Resolved</p>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

@section('scripts')

@endsection
