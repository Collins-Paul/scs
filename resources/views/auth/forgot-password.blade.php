<x-guest-layout>
    <div class="px-2 flex lg:flex-row flex-col-reverse lg:justify-center lg:items-center lg:h-screen">

        <!-- Start Page Content here -->
        <div class="bg-white p-8 rounded-lg shadow-lg md:mx-auto lg:mx-0 mb-8 lg:w-[25%] md:w-[60%] w-[100%]">
            <form class=" grid gap-4">
                <h2 class="text-xl font-bold text-primary text-center hidden lg:block">What E-Mail Should We Send Your Password Reset Link To?</h2>

                <div class="grid gap-2">
                    <label for="email" class="font-medium">Email</label>
                    <input type="email" name="email" class="form-input border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300 rounded-lg" required>
                </div>

                {{-- <button class="btn bg-primary text-white">Send Link</button> --}}
                <a href="{{ route('new-password') }}"  class="btn bg-primary text-white">Send Link</a>
            </form>
        </div>
        <!-- End Page content -->

        <div class="bg-primary p-8 rounded-tr-lg rounded-tl-lg lg:rounded-tl-none lg:rounded-tr-lg lg:rounded-br-lg shadow-lg md:mx-auto lg:mx-0 mt-8 lg:w-[25%] md:w-[60%] w-[100%] animate-bounce-custom">

            <h1 class="text-white text-2xl font-semibold">Forgot Your Password? No Worries!</h1>
            <p class="text-white text-sm mt-2">It happens to the best of us! Just enter your email below, and we'll send you a secure link to reset your password. You'll be back in no time!</p>
        </div>

    </div>
</x-guest-layout>
