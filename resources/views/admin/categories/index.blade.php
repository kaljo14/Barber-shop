<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.categories.create') }}" class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 rounded-lg text-white ">New Service</a>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="  w-full text-sm text-left text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                            Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                            Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                            Image
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
                        @foreach ($categories as $category)
                            
                        
                       <tr class="bg-white border-b ">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                            {{ $category->name }}
                            </td>
                            <div>
                            <td  class="px-6 py-4 font-medium   text-gray-900  whitespace-nowrap">
                            {{ $category->description }}
                            </td>
                            </div>
                             <td scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                            <img src="{{ Storage::url($category->image) }}"class="2-16 h-16 rounded">
                                
                            </td>
                             <td scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                            {{ $category->price . " BGN"}} 
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.categories.edit',$category->id) }}" 
                                        class="px-4 py-2 bg-green-400 hover:bg-green-600 rounded-lg text-white">Edit</a>
                                    <form class="px-4 py-2 bg-red-400 hover:bg-red-600 rounded-lg text-white"
                                        method="POST" 
                                        action="{{ route('admin.categories.destroy',$category->id) }}"
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
