@extends('layouts.app')

@section('title', 'Help')

@section('content')
<main class="space-y-5">
    <div class="card m-5 p-5">
        <h3 class="font-medium text-2xl text-center lg:text-start">Help & Support</h3>
    </div>

    <div class="lg:m-5 p-2 lg:p-5">
        <h1 class="font-medium text-xl px-3">Frequently Asked Questions</h1>

        <div>
            <div class="card my-5 lg:m-5 lg:p-5 lg:text-lg">
                <div class="card-header flex items-center justify-between">
                    <div class="">
                        <p class="text-default-600 font-medium">Here are some frequently asked questions and answers</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="hs-accordion-group">
                        <div class="hs-accordion" id="basic-heading-one">
                            <button
                                class="hs-accordion-toggle hs-accordion-active:text-primary group py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition hover:text-default-500"
                                aria-controls="hs-basic-collapse-one">
                                <i
                                    class="ti ti-plus hs-accordion-active:hidden hs-accordion-active:text-primary-600 block w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                                <i
                                    class="ti ti-minus hs-accordion-active:block hs-accordion-active:text-primary-600 hidden w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                                    <i class="bi bi-caret-right-fill transition-transform duration-300 hs-accordion-active:rotate-90"></i>
                                    How do I reset my password?
                            </button>
                            <div id="basic-collapse-one"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="#basic-heading-one">
                                <p class="text-default-800 bg-green-100  card p-2">
                                    <em></em>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit tempore nisi, corporis expedita, eligendi quam, ipsam doloribus minus perspiciatis quis vel. Commodi molestiae veritatis voluptates odio, illo a totam fugiat.
                                </p>
                            </div>
                        </div>

                        <div class="hs-accordion" id="basic-heading-two">
                            <button
                                class="hs-accordion-toggle hs-accordion-active:text-primary group py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition hover:text-default-500"
                                aria-controls="hs-basic-collapse-two">
                                <i
                                    class="ti ti-plus hs-accordion-active:hidden hs-accordion-active:text-primary-600 block w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                                <i
                                    class="ti ti-minus hs-accordion-active:block hs-accordion-active:text-primary-600 hidden w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                                    <i class="bi bi-caret-right-fill transition-transform duration-300 hs-accordion-active:rotate-90"></i>
                                    How can I contact support?
                            </button>
                            <div id="basic-collapse-two"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="#basic-heading-two">
                                <p class="text-default-800 bg-green-100  card p-2">
                                    <em></em>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, cumque velit nemo accusamus repellendus nesciunt id illum recusandae! Excepturi quibusdam eum odit voluptatem sint et omnis quia dolorem nisi voluptatibus?
                                </p>
                            </div>
                        </div>

                        <div class="hs-accordion" id="basic-heading-three">
                            <button
                                class="hs-accordion-toggle hs-accordion-active:text-primary group py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition hover:text-default-500"
                                aria-controls="hs-basic-collapse-three">
                                <i
                                    class="ti ti-plus hs-accordion-active:hidden hs-accordion-active:text-primary-600 block w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                                <i
                                    class="ti ti-minus hs-accordion-active:block hs-accordion-active:text-primary-600 hidden w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                                    <i class="bi bi-caret-right-fill transition-transform duration-300 hs-accordion-active:rotate-90"></i>
                                    How do I report a bug?
                            </button>
                            <div id="basic-collapse-three"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="#basic-heading-three">
                                <p class="text-default-800 bg-green-100  card p-2">
                                    <em></em>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni, aut quaerat inventore deserunt sint placeat consequuntur deleniti dolor eligendi error nulla facilis, nisi in debitis! Deserunt esse omnis blanditiis ipsam?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="lg:m-5 p-2 lg:p-5">
        <h1 class="font-medium text-xl px-3">Contact Us</h1>

        <div>
            <div class="card my-5 lg:m-5 p-5 lg:text-lg">
                <form class=" grid gap-4">
                    <div class="flex lg:flex-row flex-col gap-4 lg:grid-cols-12">
                        <div class="grid gap-2">
                            <label for="name" class="font-medium text-lg">Name</label>
                            <input type="name" name="name" class="form-input rounded-lg border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300" required>
                        </div>

                        <div class="grid gap-2">
                            <label for="email" class="font-medium text-lg">Email</label>
                            <input type="email" name="email" class="form-input rounded-lg border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300" required>
                        </div>
                    </div>

                    <div class="grid gap-2">
                        <label for="" class="text-gray-800 text-sm font-medium inline-block mb-2">Complaint:</label>
                        <textarea name="complaint" id="" cols="30" rows="10" class="form-input border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300 rounded-lg"></textarea>
                    </div>

                    <input type="submit" value="Submit" class="btn hover:bg-primary hover:text-white w-full  cursor-pointer bg-white text-green-500 border-green-500">

                </form>
            </div>
        </div>
    </div>
</main>

@endsection

@section('scripts')

@endsection
