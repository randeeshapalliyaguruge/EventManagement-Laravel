<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Past Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container mx-auto">
                <div class="grid grid-cols-4 gap-4 ">
                    @foreach ($pastEvents as $event)
                        @livewire('event-card', [
                            'event' => $event
                        ])
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    {{ $pastEvents->links() }}
</x-app-layout>
