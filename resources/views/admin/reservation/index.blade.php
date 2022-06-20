<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             <div class="flex m-5 p-2 justify-end">

                 <div class=" flex-none">
                     <a href="{{ route('admin.passedreservation.index')}}" class="  px-4 py-2 bg-blue-400 hover:bg-blue-600 rounded-lg text-white ">Show Passed Reservation</a>
                    
                   

                        <a href="{{ route('admin.reservation.create') }}" class="px-4 py-2 bg-blue-400 hover:bg-blue-600 rounded-lg text-white ">New Reservation</a>
                    </div>
             </div>
           
        
            
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                        <tr>
                        <th scope="col" class="px-6 py-3">
                        First Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Last Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Phone
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Reservation Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Barber Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Service Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                        
                         @foreach ($reservation as $reservation)
                            
                            
                       <tr class="bg-white border-b ">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                            {{ $reservation->first_name }}
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                            {{ $reservation->last_name }}
                            </td>

                            <td  class="px-6 py-4 font-medium   text-gray-900  whitespace-nowrap">
                            {{ $reservation->email }}
                            </td>

                            <td scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                            {{ $reservation->phone_number}} 
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                            {{ $reservation->reser_date}} 
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                            {{ $reservation->barber->name}} 
                            </td>
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                            {{ $reservation->cat_id}} 
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.reservation.edit',$reservation->id) }}" 
                                        class="px-4 py-2 bg-green-400 hover:bg-green-600 rounded-lg text-white">Edit</a>
                                    <form class="px-4 py-2 bg-red-400 hover:bg-red-600 rounded-lg text-white"
                                        method="POST" 
                                        action="{{ route('admin.reservation.destroy',$reservation->id) }}"
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
