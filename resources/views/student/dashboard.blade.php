@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<main>
    <div class="card m-5 p-5">
        <h3 class="font-medium text-2xl text-center lg:text-start">Dashboard</h3>
    </div>

    <div class="">
        <div class="grid lg:grid-cols-2">
            <div class="m-5 flex flex-col gap-3">

                <a href="{{ route('complaints.create') }}">
                    <div class="card border border-primary text-center shadow-lg rounded-lg p-5 hover:p-2 group hover:bg-primary transition-all duration-500">
                        <div class="group-hover:text-[white] group-hover:animate-pulse group-hover:font-bold text-[20px] group-hover:text-[30px]" >
                            <i class="bi bi-plus-lg"></i>
                        </div>
                        <h3 class="group-hover:text-[white] group-hover:font-bold group-hover:text-lg" >New Complaint</h3>
                    </div>
                </a>

                <div class="card border border-primary text-center shadow-lg rounded-lg p-5 hover:p-2 group hover:bg-primary transition-all duration-500">
                    <div class="flex items-center justify-center gap-5">
                        <div>
                            <h3 class="group-hover:text-[white] group-hover:animate-pulse group-hover:font-bold text-[20px] group-hover:text-[30px]">{{ $complaints->count() }}</h3>
                            <h3 class="group-hover:text-[white] group-hover:font-bold group-hover:text-lg" >Complaints</h3>
                        </div>

                        <div>
                            <h3 class="group-hover:text-[white] group-hover:animate-pulse group-hover:font-bold text-[20px] group-hover:text-[30px]">{{ $resolved }}</h3>
                            <h3 class="group-hover:text-[white] group-hover:font-bold group-hover:text-lg" >Resolved</h3>
                        </div>
                    </div>
                </div>

                <!-- <a href="{{ route('log') }}" class="card border border-primary text-center shadow-lg rounded-lg p-5 hover:p-2 group hover:bg-primary transition-all duration-500 col-span-2">
                    <div class="group-hover:text-[white] group-hover:animate-pulse group-hover:font-bold text-[20px] group-hover:text-[30px]" >
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h3 class="group-hover:text-[white] group-hover:font-bold group-hover:text-lg" >Students Complaint Log</h3>
                </a> -->

            </div>
        </div>
    </div>
</main>

@endsection

@section('scripts')

@endsection
