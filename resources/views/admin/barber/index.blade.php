<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.barber.create') }}" class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 rounded-lg text-white ">New Barber</a>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-left w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                Description
                                </th>
                                <th scope="col" class="px-6 py-3">
                                Status
                                </th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach ($barber as $barber)
                            <tr class="bg-white border-b ">
                           
                            <td class="px-6 py-4 font-medium text-gray-900">
                            {{ $barber->name }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900">
                            {{ $barber->description }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900">
                            {{ $barber->status->name }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.barber.edit',$barber->id) }}" 
                                        class="px-4 py-2 bg-green-400 hover:bg-green-600 rounded-lg text-white">Edit</a>
                                    <form class="px-4 py-2 bg-red-400 hover:bg-red-600 rounded-lg text-white"
                                        method="POST" 
                                        action="{{ route('admin.barber.destroy',$barber->id) }}"
                                        onsubmit="return confirm('Do you want to delete this item ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </div>
                             </td>
                         </tr>
                        @endforeach
                     
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-admin-layout>
