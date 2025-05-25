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

        <script src="https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            @keyframes bounce-custom {
              0%, 100% {
                transform: translateY(-25%);
                animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
              }
              50% {
                transform: translateY(0);
                animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
              }
            }

            @keyframes bounce-lg {
              0%, 100% {
                transform: translateY(-50%);
                animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
              }
              50% {
                transform: translateY(0);
                animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
              }
            }

            .animate-bounce-custom {
              animation: bounce-custom 5s infinite;
            }

            @media (min-width: 1024px) {
              .animate-bounce-custom {
                animation: bounce-lg 5s infinite;
              }
            }
        </style>

    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
           @yield('content')
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
    </body>
</html>
