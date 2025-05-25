<header class="sticky top-0 bg-white h-16 flex justify-between items-center px-5 gap-4 z-50">
    <!-- Sidenav Menu Toggle Button -->
    <button id="button-toggle-menu" class="text-gray-500 hover:text-gray-600 p-2 rounded-full block lg:hidden md:hidden cursor-pointer"
        data-hs-overlay="#app-menu" aria-label="Toggle navigation">
        <!-- <i class="ti ti-menu-2 text-2xl"></i> -->
        <i class="material-symbols-rounded font-light text-2xl transition-all group-hover:fill-1">Menu</i>
    </button>

    <!-- Fullscreen Toggle Button -->
    <div class="md:flex hidden">
        <button data-toggle="fullscreen" type="button" class="nav-link p-2">
            <span class="sr-only">Fullscreen Mode</span>
            <span class="flex items-center justify-center size-6">
                <i class="ti ti-maximize text-2xl"></i>
            </span>
        </button>
    </div>

    <!-- Profile Dropdown Button -->
    <div class="">
        <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
            <button type="button" class="hs-dropdown-toggle nav-link flex items-center gap-2">
                <img src="{{ asset('assets/images/users/avatar-6.jpg') }}" alt="user-image" class="rounded-full h-10">
                <span class="md:flex items-center hidden">
                    <span class="font-semibold text-base">{{ Auth::user()->firstname }}</span>
                    <i class="ti ti-chevron-down text-sm ms-2"></i>
                </span>
            </button>
        </div>
    </div>
</header>
