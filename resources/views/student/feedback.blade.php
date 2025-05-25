@extends('layouts.app')

@section('title', 'Feedback')

@section('content')
<main class="">
    <div class="card m-5 p-5" >
        <h3 class="font-medium text-2xl text-center lg:text-start">Feedback & Ratings</h3>
        <p class="text-center lg:text-start" >Share your experience!</p>
    </div>

    <div class="card lg:w-[70%] w-full mx-auto p-5 space-y-5">
        <p class="text-center lg:p-2 font-medium text-lg" >We'd love to here your thoughts. Please fill out the form below to share your experience</p>

        <!-- Star Rating System -->
        <div class="stars flex justify-center flex-row-reverse space-x-2 space-x-reverse">
            <input type="radio" id="star5" name="rating" value="5" class="hidden">
            <label for="star5" class="text-[30px] text-[#ccc] hover:text-[gold]"><i class="bi bi-star-fill"></i></label>

            <input type="radio" id="star4" name="rating" value="4" class="hidden">
            <label for="star4" class="text-[30px] text-[#ccc] hover:text-[gold]"><i class="bi bi-star-fill"></i></label>

            <input type="radio" id="star3" name="rating" value="3" class="hidden">
            <label for="star3" class="text-[30px] text-[#ccc] hover:text-[gold]"><i class="bi bi-star-fill"></i></label>

            <input type="radio" id="star2" name="rating" value="2" class="hidden">
            <label for="star2" class="text-[30px] text-[#ccc] hover:text-[gold]"><i class="bi bi-star-fill"></i></label>

            <input type="radio" id="star1" name="rating" value="1" class="hidden">
            <label for="star1" class="text-[30px] text-[#ccc] hover:text-[gold]"><i class="bi bi-star-fill"></i></label>
        </div>

        {{-- Feedback Form --}}
        <form class="w-full p-5 space-y-2 card shadow-lg" >
            <h1 class="px-2">User Name</h1>
            <textarea name="" id="" placeholder="Write Your Reviow Here....." class="w-full form-input bg-[#ccc] border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300 rounded-lg"></textarea>
            <input type="submit" value="Submit" class="btn bg-primary text-white w-full">
        </form>

        {{-- Recent reviews --}}
        <div class="card lg:p-5 py-5 space-y-2">
            <h1 class="font-medim text-2xl text-center lg:text-start">Recent Reviews</h1>

            <div class="card p-3 hover:bg-[#ccc] shadow-lg group">
                <!-- Star Rating System -->
                <div class="stars flex justify-center flex-row-reverse space-x-2 space-x-reverse lg:p-3 py-3">
                    <input type="radio" id="star5" name="rating" value="5" class="hidden">
                    <label for="star5" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>

                    <input type="radio" id="star4" name="rating" value="4" class="hidden">
                    <label for="star4" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>

                    <input type="radio" id="star3" name="rating" value="3" class="hidden">
                    <label for="star3" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>

                    <input type="radio" id="star2" name="rating" value="2" class="hidden">
                    <label for="star2" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>

                    <input type="radio" id="star1" name="rating" value="1" class="hidden">
                    <label for="star1" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>
                </div>

                <h3 class="font-medium text-lg">User 1</h3>
                <p class="text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem consequuntur temporibus vel ab ipsa alias dolore quod ipsam repudiandae optio consectetur veritatis sit, non, pariatur quibusdam aliquid ipsum! Doloremque, molestias!</p>
            </div>

            <div class="card p-3 hover:bg-[#ccc] shadow-lg group">
                <!-- Star Rating System -->
                <div class="stars flex justify-center flex-row-reverse space-x-2 space-x-reverse lg:p-3 py-3">
                    <input type="radio" id="star5" name="rating" value="5" class="hidden">
                    <label for="star5" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>

                    <input type="radio" id="star4" name="rating" value="4" class="hidden">
                    <label for="star4" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>

                    <input type="radio" id="star3" name="rating" value="3" class="hidden">
                    <label for="star3" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>

                    <input type="radio" id="star2" name="rating" value="2" class="hidden">
                    <label for="star2" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>

                    <input type="radio" id="star1" name="rating" value="1" class="hidden">
                    <label for="star1" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>
                </div>

                <h3 class="font-medium text-lg">User 1</h3>
                <p class="text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem consequuntur temporibus vel ab ipsa alias dolore quod ipsam repudiandae optio consectetur veritatis sit, non, pariatur quibusdam aliquid ipsum! Doloremque, molestias!</p>
            </div>

            <div class="card p-3 hover:bg-[#ccc] shadow-lg group">
                <!-- Star Rating System -->
                <div class="stars flex justify-center flex-row-reverse space-x-2 space-x-reverse lg:p-3 py-3">
                    <input type="radio" id="star5" name="rating" value="5" class="hidden">
                    <label for="star5" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>

                    <input type="radio" id="star4" name="rating" value="4" class="hidden">
                    <label for="star4" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>

                    <input type="radio" id="star3" name="rating" value="3" class="hidden">
                    <label for="star3" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>

                    <input type="radio" id="star2" name="rating" value="2" class="hidden">
                    <label for="star2" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>

                    <input type="radio" id="star1" name="rating" value="1" class="hidden">
                    <label for="star1" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>
                </div>

                <h3 class="font-medium text-lg">User 1</h3>
                <p class="text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem consequuntur temporibus vel ab ipsa alias dolore quod ipsam repudiandae optio consectetur veritatis sit, non, pariatur quibusdam aliquid ipsum! Doloremque, molestias!</p>
            </div>

            <div class="card p-3 hover:bg-[#ccc] shadow-lg group">
                <!-- Star Rating System -->
                <div class="stars flex justify-center flex-row-reverse space-x-2 space-x-reverse lg:p-3 py-3">
                    <input type="radio" id="star5" name="rating" value="5" class="hidden">
                    <label for="star5" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>

                    <input type="radio" id="star4" name="rating" value="4" class="hidden">
                    <label for="star4" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>

                    <input type="radio" id="star3" name="rating" value="3" class="hidden">
                    <label for="star3" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>

                    <input type="radio" id="star2" name="rating" value="2" class="hidden">
                    <label for="star2" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>

                    <input type="radio" id="star1" name="rating" value="1" class="hidden">
                    <label for="star1" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>
                </div>

                <h3 class="font-medium text-lg">User 1</h3>
                <p class="text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem consequuntur temporibus vel ab ipsa alias dolore quod ipsam repudiandae optio consectetur veritatis sit, non, pariatur quibusdam aliquid ipsum! Doloremque, molestias!</p>
            </div>

            <div class="card p-3 hover:bg-[#ccc] shadow-lg group">
                <!-- Star Rating System -->
                <div class="stars flex justify-center flex-row-reverse space-x-2 space-x-reverse lg:p-3 py-3">
                    <input type="radio" id="star5" name="rating" value="5" class="hidden">
                    <label for="star5" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>

                    <input type="radio" id="star4" name="rating" value="4" class="hidden">
                    <label for="star4" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>

                    <input type="radio" id="star3" name="rating" value="3" class="hidden">
                    <label for="star3" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>

                    <input type="radio" id="star2" name="rating" value="2" class="hidden">
                    <label for="star2" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>

                    <input type="radio" id="star1" name="rating" value="1" class="hidden">
                    <label for="star1" class="text-[30px] text-[gold]"><i class="bi bi-star-fill group-hover:animate-pulse"></i></label>
                </div>

                <h3 class="font-medium text-lg">User 1</h3>
                <p class="text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem consequuntur temporibus vel ab ipsa alias dolore quod ipsam repudiandae optio consectetur veritatis sit, non, pariatur quibusdam aliquid ipsum! Doloremque, molestias!</p>
            </div>
        </div>
    </div>
</main>

@endsection

@section('scripts')

@endsection
