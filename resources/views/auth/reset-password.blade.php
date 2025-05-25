<x-guest-layout>
    <div class="px-2 lg:flex lg:justify-center lg:items-center lg:h-screen">
        <div class="bg-primary p-8 rounded-tl-lg rounded-tr-lg lg:rounded-tr-none lg:rounded-tl-lg lg:rounded-bl-lg shadow-lg md:mx-auto lg:mx-0 mt-8 lg:w-[25%] md:w-[60%] w-[100%] animate-bounce-custom">
            <h1 class="text-white text-2xl font-semibold">Secure Your Access</h1>
            <p class="text-white text-sm mt-2">Your security is our priority! Choose a strong and memorable password to keep your account safe. Make sure it's at least 8 characters long, with a mix of letters, numbers, and symbols. Let's get you back in securely!</p>
        </div>
        <!-- Start Page Content here -->
        <div class="bg-white p-8 rounded-lg shadow-lg md:mx-auto lg:mx-0 mb-8 lg:w-[25%] md:w-[60%] w-[100%]">
            <form class=" grid gap-4">
                <h2 class="text-xl font-bold text-primary text-center hidden lg:block">Set a New Password</h2>

                <div class="grid gap-2">
                    <label for="password" class="font-medium">New Password</label>
                    <input type="password" name="password" class="form-input border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300 rounded-lg" required>
                </div>

                <div class="grid gap-2">
                    <label for="password_confirmation" class="font-medium">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-input border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300 rounded-lg" required>
                </div>

                {{-- <button class="btn bg-primary text-white">Save</button> --}}
                <a href="{{ route('login') }}" class="btn bg-primary text-white">Save</a>

            </form>
        </div>
        <!-- End Page content -->

    </div>

</x-guest-layout>
