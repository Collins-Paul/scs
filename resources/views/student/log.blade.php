@extends('layouts.app')

@section('title', 'Log')

@section('content')
<div>
    <div class="card m-5 p-5">
        <h3 class="font-medium text-2xl text-center lg:text-start">Students Complaint Log</h3>
    </div>


    <div class="flex-col gap-1 bg-default-100 lg:m-5 p-5 relative">
        <div class="grid gap-5 mt-5">
            <a href="" class="card hover:bg-green-100 lg:p-4 py-4 px-2 hover:rounded-lg shadow-lg">
                <span class="absolute top-0 mt-[-10px] mr-[-10px] right-0 p-1 text-sm font-medium bg-green-500 text-white">4/2/2025, 2:05PM</span>
                <div>
                    <h3 class="font-medium text-xl">
                        {{-- <i class="bi bi-list-check"></i> --}}

                        <span class="absolute top-0 left-2 p-2 text-xs font-medium bg-green-500 text-white rounded-lg mt-[-10px]">
                            <span class="w-1.5 h-1.5 inline-block bg-white rounded-full animate-ping"></span>
                            Status
                        </span>

                         <p class="text-ellipsis md:text-clip mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quo modi molestiae in? Et dicta vero, at dolore, sunt blanditiis accusantium quod perferendis saepe expedita esse vel veniam ab maiores.</p>
                    </h3>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection
