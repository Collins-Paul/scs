<aside id="app-menu" class="pt-5 hs-overlay fixed inset-y-0 start-0 z-[60] hidden w-72 -translate-x-full transform overflow-y-auto border-e border-default-200 bg-white transition-all duration-300 hs-overlay-open:translate-x-0 lg:bottom-0 lg:end-auto lg:z-30 lg:block lg:translate-x-0 rtl:translate-x-full rtl:hs-overlay-open:translate-x-0 rtl:lg:translate-x-0 print:hidden [--body-scroll:true] [--overlay-backdrop:true] lg:[--overlay-backdrop:false]">
    <section class="flex flex-col lg:gap-10 lg:space-y-5">

        <div class="hs-accordion-group h-[calc(100%-72px)] p-4" data-simplebar>
            <ul class="admin-menu flex w-full flex-col gap-5">

                @if (Auth::user()->role->role == 'student')
                    <li class="menu-item">
                        <a class="group flex items-center gap-x-3.5 rounded-e-full px-4 py-2 text-lg font-medium text-default-700 transition-all hover:bg-default-100" wire:navigate wire:current="active" href="{{ route('dashboard') }}">
                            <i class="material-symbols-rounded font-light text-2xl transition-all group-hover:fill-1">home</i>
                            Dashboard
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="group flex items-center gap-x-3.5 rounded-e-full px-4 py-2 text-lg font-medium text-default-700 transition-all hover:bg-default-100" wire:navigate wire:current="active" href="{{ route('complaints') }}">
                            <i class="material-symbols-rounded font-light text-2xl transition-all group-hover:fill-1">article</i>
                            <span class="menu-text"> My Complaints </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="group flex items-center gap-x-3.5 rounded-e-full px-4 py-2 text-lg font-medium text-default-700 transition-all hover:bg-default-100" wire:navigate wire:current="active" href="{{ route('notifications.index') }}">
                            <i class="material-symbols-rounded font-light text-2xl transition-all group-hover:fill-1">notifications</i>
                            <span class="menu-text"> Notifications </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="group flex items-center gap-x-3.5 rounded-e-full px-4 py-2 text-lg font-medium text-default-700 transition-all hover:bg-default-100" wire:navigate wire:current="active" href="{{ route('profile.index') }}">
                            <i class="material-symbols-rounded font-light text-2xl transition-all group-hover:fill-1">account_circle</i>
                            <span class="menu-text"> Profile</span>
                        </a>
                    </li>
                @endif

                @if (Auth::user()->role->role == 'admin')
                    <div class="flex items-center justify-center px-4 py-2">
                        <div class="flex items-center justify-center">
                            <img src="{{ asset('assets/images/users/avatar-6.jpg') }}" class="rounded-full h-[5rem] w-[5rem]" alt="">
                        </div>
                    </div>
                    
                    <div class="flex flex-col items-center justify-center">
                        <h3 class="text-lg font-semibold">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h3>
                        <p class="text-sm text-gray-500">Role: {{ Auth::user()->role->role }}</p>
                    </div>

                    <li class="menu-item">
                        <a class="group flex items-center gap-x-3.5 rounded-e-full px-4 py-2 text-lg font-medium text-default-700 transition-all hover:bg-default-100" wire:navigate wire:current="active" href="{{ route('admin.dashboard') }}">
                            <i class="material-symbols-rounded font-light text-2xl transition-all group-hover:fill-1">home</i>
                            Dashboard
                        </a>
                    </li>
                @endif

                <li class="menu-item">
                    <a href="{{ route('logout') }}"
                        class="hs-accordion-toggle group flex items-center gap-x-3.5 rounded-e-full px-4 py-2 text-lg font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
                        <i class="material-symbols-rounded font-light text-2xl transition-all group-hover:fill-1">Logout</i>
                        <span class="menu-text"> Logout </span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
</aside>
