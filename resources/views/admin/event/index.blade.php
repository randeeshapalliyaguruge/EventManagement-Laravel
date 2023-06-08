<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex justify-end mr-5 mt-5 mb-5">
                    <a href="{{ route('admin.events.create') }}"
                        class="bg-blue-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">Create New Event</a>
                </div>

                <x-table>
                    <x-slot name="head">
                        <x-th>Event</x-th>
                        <x-th>Image</x-th>
                        <x-th>Category</x-th>
                        {{-- <x-th>Address</x-th> --}}
                        <x-th>City</x-th>
                        <x-th>Date</x-th>
                        <x-th>Phone</x-th>
                        <x-th>Website</x-th>
                        <x-th>Actions</x-th>
                    </x-slot>
                    <x-slot name="body">
                        @foreach ($events as $event)
                            <x-tr>
                                <x-td class="px-6 py-4 font-medium text-gray-900">{{ $event->event_name }}</x-td>
                                <x-td>
                                    @if ($event->hasMedia('image'))
                                        <img src="{{ $event->getFirstMediaUrl('image') }}" alt="{{ $event->event_name }}" />
                                    @else
                                        -
                                    @endif
                                </x-td>
                                <x-td>
                                    <span
                                    class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                    {{ $event->category->name }}</x-td></span>
                                {{-- <x-td>{{ $event->address }}</x-td> --}}
                                <x-td>{{ $event->city }}</x-td>
                                <x-td>{{ $event->date }}</x-td>
                                <x-td>{{ $event->phone }}</x-td>
                                <x-td>
                                    <a href="{{ $event->website }}" target="_blank">
                                        Website
                                    </a>
                                </x-td>
                                <x-td class="flex gap-3">
                                    <a href="{{ route('admin.events.edit', $event->id) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                    <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete this Event?')"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                    </form>
                                </x-td>
                            </x-tr>
                        @endforeach
                    </x-slot>
                </x-table>
                <div class="p-4">
                    {{-- {{ $events->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
