<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.categories.index') }}" class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 rounded-lg text-white ">Services</a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form enctype="multipart/form-data">
                        <div class="sm:col-snap-6">
                            <label for="name" class="block text-sm font-midium text-gray-600">Name</label>
                            <div class="mt-1">
                                <input type="text" id="name" class="block w-full focus:ring-indigo-400 ">
                            </div>
                        </div>
                        <div class=" sm:col-snap-6">
                            <label for="image" class="block text-sm font-midium text-gray-600 ">Image</label>
                            <div class="mt-1">
                                <input type="file" id="image" class="block w-full  focus:ring-indigo-400">
                            </div>
                        </div>
                        <div class="sm:col-snap-6">
                            <label for="body" class="block text-sm font-midium text-gray-600 ">Description</label>
                            <div class="mt-1">
                                <textarea id="body" rows="3" class=" w-full shadow-sm focus:ring-indigo-400 "></textarea>
                            </div>
                        </div>
                        <div class="mt-2 p-2  ">
                        <button type="submit" class="px-3 py-1 bg-indigo-400 hover:bg-indigo-600 rounded-lg text-white">Submit</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</x-admin-layout>
