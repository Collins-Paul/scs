<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

        <!-- Icons css  (Mandatory in All Pages) -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">

        <!-- Google Font Family (Mandatory in All Pages) -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&amp;display=swap" rel="stylesheet">

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

        <!-- App css  (Mandatory in All Pages) -->
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    </head>
    <body>
        <div id="loadingScreen" class="fixed top-0 left-0 right-0 bottom-0 h-[100vh] inset-0 flex items-center justify-center bg-primary z-[9999]">
            <div class="animate-bounce flex h-10 w-10 rounded-full bg-white">
                <div class="animate-ping flex h-10 w-10 rounded-full bg-white">
                </div>
            </div>
        </div>

        <div class="flex wrapper">

            <!-- Start Sidebar -->
            @include('includes.sidebar')
            <!-- End Sidebar -->

            <!-- Start Page Content here -->
            <div class="page-content lg:ps-[20rem] p-5">

                <!-- Topbar Start -->
                @include('includes.navbar')
                <!-- Topbar End -->

                @yield('content')

            </div>
            <!-- End Page content -->

        </div>

        <!-- Plugin Js (Mandatory in All Pages) -->
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/preline/preline.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/iconify-icon/iconify-icon.min.js') }}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

        <!-- App Js (Mandatory in All Pages) -->
        <script src="{{ asset('assets/js/app.js') }}"></script>

        <script>
            setTimeout(() => {
            document.getElementById("loadingScreen").style.display = "none";
            }, 3000);
        </script>

        @yield('scripts')

    </body>
</html>
