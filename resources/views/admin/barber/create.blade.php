<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.categories.index') }}" class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 rounded-lg text-white ">Barber</a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.barber.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="sm:col-snap-6">
                            <label for="name" class="block text-sm font-midium text-gray-600">Name</label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name" class="block w-full focus:ring-indigo-400 @error ('name') border-red-500 @enderror">
                            </div>
                             @error('name')
                            <div class="test-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                      
                        <div class="sm:col-snap-6">
                            <label for="description" class="block text-sm font-midium text-gray-600 ">Description</label>
                            <div class="mt-1">
                                <textarea id="description"  name="description" rows="3" class=" w-full shadow-sm focus:ring-indigo-400 @error ('description') border-red-500 @enderror"></textarea>
                            </div>
                             @error('description')
                            <div class="test-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                       <div class="sm:col-span-6 pt-5">
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <div class="mt-1">
                                <select id="status" name="status" class="form-multiselect block w-full mt-1">
                                    @foreach (App\Enums\BarberStatus::cases() as $status)
                                        <option value="{{ $status->value }}">{{ $status->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                             @error('status')
                            <div class="test-sm text-red-500">{{ $message }}</div>
                            @enderror
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
