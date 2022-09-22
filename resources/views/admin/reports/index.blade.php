<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"></h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-5 p-2 justify-end">
                <div class="flex-none">
                    

                    <a
                        href="{{ route('admin.reservation.create') }}"
                        class="px-4 py-2 bg-blue-400 hover:bg-blue-600 rounded-lg text-white"
                    >
                        Back</a
                    >
                </div>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Name</th>
                            <th scope="col" class="px-6 py-3">ID</th>
                            <th scope="col"  class="px-6 py-3">
                                Monthly salary
                            </th>


                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barber as $barber)
                        <tr class="bg-white border-b">
                           
                           
                        
                            <td
                                scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                            >
                                {{ $barber->name}}
                            </td>
                            <td
                                scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                            >
                                {{ $barber->id}}
                            </td>
                            <td
                                scope="row"
                                class="px-6 py-4 font-medium text-green-500 whitespace-nowrap"
                            >
                                {{ $salary . ' BGN'}} 
                            </td>
                          
                            <td class="px-6 py-4 text-right">
                                <div class="flex space-x-2">
                                    
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
