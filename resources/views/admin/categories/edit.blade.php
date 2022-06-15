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
                    <form method="POST" action="{{ route('admin.categories.update',$category->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-snap-6">
                            <label for="name" class="block text-sm font-midium text-gray-600">Name</label>
                            <div class="mt-1">
                                <input type="text" name="name" id="name" value="{{ $category->name }}" class="block w-full focus:ring-indigo-400 @error ('name') border-red-500 @enderror">
                            </div>
                             @error('name')
                            <div class="test-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class=" sm:col-snap-6">
                            <label for="image" class="block text-sm font-midium text-gray-600 ">Image</label>
                            <div>
                                <img src="{{Storage::url($category->image)}}"class="w-52 h-42 rounded-lg">
                            </div>
                            <div class="mt-1">
                                <input type="file" id="image" name="image" class="block w-full  focus:ring-indigo-400">
                            </div>
                        </div>
                        <div class="sm:col-snap-6">
                            <label for="description" class="block text-sm font-midium text-gray-600 ">Description</label>
                            <div class="mt-1">
                                <textarea id="description" name="description" rows="3" class=" w-full shadow-sm focus:ring-indigo-400 ">
                                    {{ $category->description }}
                                </textarea>
                            </div>
                        </div>
                        <div class="sm:col-snap-6">
                            <label for="price" class="block text-sm font-midium text-gray-600">Price</label>
                            <div class="mt-1">
                                <input type="number" name="price" id="price"  value="{{ $category->price }}" class="block w-full focus:ring-indigo-400 @error ('price') border-red-500 @enderror ">
                            </div>
                            @error('price')
                            <div class="test-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-2 p-2  ">
                        <button type="submit" class="px-3 py-1 bg-indigo-400 hover:bg-indigo-600 rounded-lg text-white">Update</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</x-admin-layout>
