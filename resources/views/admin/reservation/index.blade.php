<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.reservation.create') }}" class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 rounded-lg text-white ">New Reservation</a>
            </div>
            
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                <tr>
                <th scope="col" class="px-6 py-3">
                Product name
                </th>
                <th scope="col" class="px-6 py-3">
                Color
                </th>
                <th scope="col" class="px-6 py-3">
                Category
                </th>
                <th scope="col" class="px-6 py-3">
                Price
                </th>
                <th scope="col" class="px-6 py-3">
                <span class="sr-only">Edit</span>
                </th>
                </tr>
                </thead>
                <tbody>
                <tr class="bg-white border-b ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                Sliver
                </td>
                <td class="px-6 py-4">
                Laptop
                </td>
                <td class="px-6 py-4">
                $2999
                </td>
                <td class="px-6 py-4 text-right">
                <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                </td>
                </tr>
                <tr class="bg-white border-b ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                Microsoft Surface Pro
                </th>
                <td class="px-6 py-4">
                White
                </td>
                <td class="px-6 py-4">
                Laptop PC
                </td>
                <td class="px-6 py-4">
                $1999
                </td>
                <td class="px-6 py-4 text-right">
                <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                </td>
                </tr>
                <tr class="bg-white">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                Magic Mouse 2
                </th>
                <td class="px-6 py-4">
                Black
                </td>
                <td class="px-6 py-4">
                Accessories
                </td>
                <td class="px-6 py-4">
                $99
                </td>
                <td class="px-6 py-4 text-right">
                <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                </td>
                </tr>
                </tbody>
                </table>
            </div>

        </div>
    </div>
</x-admin-layout>
