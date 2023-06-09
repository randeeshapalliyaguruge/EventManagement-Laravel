<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="flex justify-end m-4">
                    <a href="{{ route('admin.category.create') }}"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add new Category
                    </a>
                </div>

                <x-table>
                    <x-slot name="head">
                        <x-th sortable>Category</x-th>
                        <x-th sortable>Description</x-th>
                        <x-th sortable>Actions</x-th>

                    </x-slot>
                    <x-slot name="body">
                        @foreach ($categories as $category)
                            <x-tr>
                                <x-td>{{ $category->name }}</x-td>
                                <x-td>{{ $category->description }}</x-td>
                                <x-td class="flex gap-3">
                                    <a href="{{ route('admin.category.edit', $category->id) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                    <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete this Category?')"
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
