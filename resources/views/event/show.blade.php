<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $event->event_name }}
        </h2>
    </x-slot>

<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <section class="bg-white dark:bg-gray-700 mb-4">
                <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 ">
                    <div class="mr-auto place-self-center lg:col-span-7">
                        <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">{{ $event->event_name }}</h1>
                        <p class="max-w-2xl mb-8 font-light text-gray-500 lg:mb-0 md:text-lg lg:text-xl dark:text-gray-400">Date: {{ $event->date }}</p>
                        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-0 md:text-lg lg:text-xl dark:text-gray-400">Stating Time: {{ $event->start_time }}</p>
                        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Ending Time: {{ $event->end_time }}</p>

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
                            <div class="flex justify-center mt-8 mb-4">
                                <a href="{{ route('login') }}" class="rounded-md bg-indigo-600 px-3 py-2 text-lg font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 place-self-center">
                                    Login to Review
                                </a>
                            @endguest
                        </div>
                    </div>


                </div>
            </div>

        </section>



    </div>
</div>
</x-app-layout>
