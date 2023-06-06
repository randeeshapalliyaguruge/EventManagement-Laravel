<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dancing event') }}
        </h2>
    </x-slot>

<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <section class="bg-white dark:bg-gray-700 mb-4">
                <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 ">
                    <div class="mr-auto place-self-center lg:col-span-7">
                        <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Payments tool for software companies</h1>
                        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">From checkout to global sales tax compliance, companies around the world use Flowbite to simplify their payment stack.</p>

                    </div>
                    <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
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
                        Event details.
                    </p>
                </div>
                <div>
                    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600">
                            Name
                        </p>
                        <p>
                            Jane Doe
                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600">
                            Location
                        </p>
                        <p>
                            Product Manager
                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600">
                            Category
                        </p>
                        <p>
                            Category type
                        </p>
                    </div>

                    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600">
                            Description
                        </p>
                        <p>
                            Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.
                        </p>
                    </div>

                    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600">
                            Price per ticket
                        </p>
                        <p>
                            Rs. 12000/=
                        </p>
                    </div>

                    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600">
                            Reserve Event
                        </p>

                        <button class="text-lg block font-semibold py-2 px-6 text-green-100 hover:text-white bg-green-400 rounded-lg shadow hover:shadow-md transition duration-300">Reserve</button>
                    </div>

                    {{-- Reviews and comment --}}
                    <div class="bg-white">
                        <div class="px-4 pt-6">
                            <h3 class="text-lg font-medium leading-7 text-gray-900">Reviews</h3>
                            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Event reviews</p>
                            <div class="mt-6 space-y-10 divide-y divide-gray-200 border-b border-t border-gray-200 pb-10">
                                <div class="pt-10 lg:grid lg:grid-cols-12 lg:gap-x-8">
                                    <div
                                        class="lg:col-span-8 lg:col-start-5 xl:col-span-9 xl:col-start-4 xl:grid xl:grid-cols-3 xl:items-start xl:gap-x-8">
                                        <div class="flex items-center xl:col-span-1">
                                            <div class="flex items-center">
                                                <!-- Active: "text-yellow-400", Inactive: "text-gray-200" -->
                                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-sm text-gray-700">5<span class="sr-only"> out of 5 stars</span>
                                            </p>
                                        </div>

                                        <div class="mt-4 lg:mt-6 xl:col-span-2 xl:mt-0">
                                            <h3 class="text-sm font-medium text-gray-900">Can&#039;t say enough good things</h3>

                                            <div class="mt-3 space-y-6 text-sm text-gray-500">
                                                <p>I was really pleased with the overall shopping experience. My order even
                                                    included a little personal, handwritten note, which delighted me!</p>
                                                <p>The product quality is amazing, it looks and feel even better than I had
                                                    anticipated. Brilliant stuff! I would gladly recommend this store to my
                                                    friends. And, now that I think of it... I actually have, many times!</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="mt-6 flex items-center text-sm lg:col-span-4 lg:col-start-1 lg:row-start-1 lg:mt-0 lg:flex-col lg:items-start xl:col-span-3">
                                        <p class="font-medium text-gray-900">Risako M</p>
                                        <time datetime="2021-01-06"
                                            class="ml-4 border-l border-gray-200 pl-4 text-gray-500 lg:ml-0 lg:mt-2 lg:border-0 lg:pl-0">May
                                            16, 2021</time>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-5">
                                <h3 class="text-lg font-medium leading-7 text-gray-900">Post A Review</h3>
                                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Write about your experince</p>
                                <form action="#" class="relative bg-white pt-4">
                                    <div
                                        class="overflow-hidden rounded-lg border border-gray-300 shadow-sm focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
                                        <label for="title" class="sr-only">Title</label>
                                        <input type="text" name="title" id="title"
                                            class="block w-full border-0 pt-2.5 text-lg font-medium placeholder:text-gray-400 focus:ring-0"
                                            placeholder="Title">
                                        <label for="description" class="sr-only">Description</label>
                                        <textarea rows="2" name="description" id="description"
                                            class="block w-full resize-none border-0 py-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                            placeholder="Write a description..."></textarea>

                                        <!-- Spacer element to match the height of the toolbar -->
                                        <div aria-hidden="true">
                                            <div class="py-2">
                                                <div class="h-9"></div>
                                            </div>
                                            <div class="h-px"></div>
                                            <div class="py-2">
                                                <div class="py-px">
                                                    <div class="h-9"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex  space-x-3 border-t border-gray-200 py-2">
                                        <div class="flex-shrink-0">
                                            <button type="submit"
                                                class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>

            </div>
        </section>





    </div>
</div>
</x-app-layout>
