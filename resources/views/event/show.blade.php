<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $event->event_name }}
        </h2>
    </x-slot>

<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        @if (session('message'))
                {{-- <div x-data="{ show: 1 }" x-on:close.stop="show = false" x-on:keydown.escape.window="show = false"
                    x-show="show" id="one"
                    class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50" style="display: none;">
                    <div x-show="show" class="fixed inset-0 transform transition-all" x-on:click="show = false"
                        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                    </div>

                    <div x-show="show"
                        class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6"
                        x-trap.inert.noscroll="show" x-transition:enter="ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                        <div>
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-green-100">
                              <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                              </svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-5">
                              <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Payment successful</h3>
                              <div class="mt-2">
                                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur amet labore.</p>
                              </div>
                            </div>
                          </div>
                          <div class="mt-5 sm:mt-6">
                            <button type="button" class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go back to dashboard</button>
                          </div>
                        </div>
                    </div>
                </div> --}}

                <script>
                    Swal.fire(
                        'Thank you!',
                        '{{ session('message') }}',
                        'success'
                    );
                </script>
            @endif

        <section class="bg-white dark:bg-gray-700 mb-4">
                <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 ">
                    <div class="mr-auto place-self-center lg:col-span-7">
                        <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">{{ $event->event_name }}</h1>
                        <p class="max-w-2xl mb-8 font-light text-gray-500 lg:mb-0 md:text-lg lg:text-xl dark:text-gray-400">Date: {{ $event->date }}</p>
                        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-0 md:text-lg lg:text-xl dark:text-gray-400">Stating Time: {{ $event->start_time }}</p>
                        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Ending Time: {{ $event->end_time }}</p>

                        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">View Count: {{ $event->view_count }}</p>
                        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Subscription Count: {{ $event->subscription_count }}</p>

                    </div>
                    <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                        <img src="{{ $event->getFirstMediaUrl('image') }}" alt="{{ $event->event_name }}" class="w-80 h-80 rounded-lg">
                    </div>

                </div>



                 <!-- component -->
                <!-- This is an example component -->
            <div class=" flex items-center justify-center px-4">

                <div class="max-w-4xl  bg-white w-full rounded-lg shadow-xl mb-8">
                    <div class="p-4 border-b">
                        <h2 class="text-2xl ">
                         Information
                        </h2>
                            <p class="text-sm text-gray-500">
                            Event details.</p>
                    </div>
                    <div>
                        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                            <p class="text-gray-600">
                            Event Name
                            </p>
                            <p>
                            {{ $event->event_name }}
                            </p>
                        </div>

                        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                            <p class="text-gray-600">
                            Location
                            </p>
                            <p>
                             {{ $event-> address }}, {{ $event-> city}}, {{ $event-> zip_code}}
                            </p>
                        </div>

                        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                            <p class="text-gray-600">
                                Category
                            </p>
                            <p>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-s font-medium bg-green-100 text-green-800">
                            {{ $event-> category->name }}
                            </span>
                            </p>
                        </div>

                        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                            <p class="text-gray-600">
                            Description
                            </p>
                            <p>
                            {{ $event-> description }}
                            </p>
                        </div>

                        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                            <p class="text-gray-600">
                                 Price per ticket
                            </p>
                            <p>
                            Rs. {{ $event-> price }}/=
                            </p>
                        </div>

                        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                            <p class="text-gray-600">
                            Reserve Event
                            </p>
                            <a href="{{ route('event.reservation', $event->id) }}">
                                <button class="text-lg block font-semibold py-2 px-6 text-green-100 hover:text-white bg-green-400 rounded-lg shadow hover:shadow-md transition duration-300">Reserve</button>
                            </a>
                        </div>

                    </div>

                    {{-- Reviews and Add comment --}}
                    <div class="bg-white">
                        <div class="px-4 pt-6">

                            {{-- Display Reviews --}}
                            @livewire('event-reviews', [
                                'event' => $event
                                ])

                            @auth
                            {{-- Post a comment --}}
                            @livewire('create-event-review', [
                                'event' => $event
                                ])
                            @endauth

                            @guest
                        <div class="my-6">
                            <a href="{{ route('login') }}"
                                class="inline-flex items-center justify-center px-4 py-2 mb-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700">
                                Login to leave a review
                            </a>
                        </div>
                    @endguest
                    </div>


                </div>
            </div>

        </section>



    </div>
</div>
</x-app-layout>
