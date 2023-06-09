<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View all Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <x-table>
                    <x-slot name="head">
                        <x-th >User</x-th>
                        <x-th>First Name</x-th>
                        <x-th>Last Name</x-th>
                        <x-th>Phone</x-th>
                        <x-th>Email</x-th>
                        <x-th>City</x-th>
                        <x-th>Created At</x-th>
                    </x-slot>
                    <x-slot name="body">
                        @foreach ($users as $user)
                            <x-tr>
                                <x-td class="px-6 py-4 font-medium text-gray-900">{{ $user->name }}</x-td>
                                <x-td>{{ $user->first_name }}</x-td>
                                <x-td>{{ $user->last_name }}</x-td>
                                <x-td>{{ $user->phone }}</x-td>
                                <x-td>{{ $user->email }}</x-td>
                                <x-td>{{ $user->city }}</x-td>
                                <x-td>{{ $user->created_at->format('d/m/Y h:ia') }}</x-td>
                                <x-td class="flex gap-3">
                                    {{-- <a href="{{ route('admin.reservation.edit', $reservation->event->id) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                    <form action="{{ route('admin.reservation.destroy', $reservation->event->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete this Event?')"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                    </form> --}}
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
