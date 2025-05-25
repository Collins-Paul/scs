<x-guest-layout>
    <div class="mt-[100px] lg:mt-5">
        <div class="px-2 lg:flex lg:justify-center lg:items-center xl:h-screen">
            <div class="bg-primary p-8 rounded-tl-lg rounded-tr-lg lg:rounded-tr-none lg:rounded-tl-lg lg:rounded-bl-lg shadow-lg md:mx-auto lg:mx-0 mt-8 lg:w-[25%] md:w-[60%] w-[100%] animate-bounce-custom">
                <h1 class="text-white text-2xl font-semibold">Welcome to our platform</h1>
                <p class="text-white text-sm mt-2">Register to get started!</p>
            </div>
            <!-- Start Page Content here -->
            <div class="bg-white p-8 rounded-lg shadow-lg md:mx-auto lg:mx-0 mb-8 lg:w-[25%] md:w-[60%] w-[100%]">
                <form class=" grid gap-4">
                    <h2 class="text-xl font-bold text-primary text-center hidden lg:block">Create Account</h2>

                    <div class="grid gap-2">
                        <label for="firstName" class="text-gray-800 text-sm font-medium inline-block mb-2">First Name</label>
                        <input type="text" name="firstName" class="form-input border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300 rounded-lg" required>
                    </div>

                    <div class="grid gap-2">
                        <label for="lastName" class="font-medium">Last Name</label>
                        <input type="text" name="lastName" class="form-input border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300 rounded-lg" required>
                    </div>

                    <div class="grid gap-2">
                        <label for="email" class="font-medium">Email</label>
                        <input type="email" name="email" class="form-input border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300 rounded-lg" required>
                    </div>

                    <div class="grid gap-2">
                        <label for="phone" class="font-medium">Phone Number</label>
                        <input type="text" name="phone" class="form-input border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300 rounded-lg" required>
                    </div>

                    <div class="grid gap-2">
                        <label for="password" class="font-medium">Password</label>
                        <input type="password" name="password" class="form-input border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300 rounded-lg" required>
                    </div>

                    <div class="grid gap-2">
                        <label for="password_confirmation" class="font-medium">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-input border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300 rounded-lg" required>
                    </div>

                    <div class="form-check">
                        <input class="form-checkbox text-green-500 rounded border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300" type="checkbox" value="" id="invalidCheck2"  required>
                        <label class="ms-1.5" for="invalidCheck2">
                            Agree to <a href="#" class="text-dark hover:text-primary">terms and conditions</a>
                        </label>
                    </div>

                    <button class="btn bg-primary text-white">Register</button>

                    <p>already have an account? <a href="{{ route('login') }}" class="text-dark hover:text-primary">Login</a></p>
                </form>
            </div>
            <!-- End Page content -->

        </div>
    </div>
</x-guest-layout>
