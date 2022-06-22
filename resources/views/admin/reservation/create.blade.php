<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.reservation.index') }}" class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 rounded-lg text-white ">Reservation List</a>
            </div>
            <div class=" relative m-2 p-2 bg-slate-100 rounded">
                
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form  method="POST" action="{{ route('admin.reservation.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="sm:col-snap-6">
                            <label for="first_name" class="block text-sm font-midium text-gray-600">First Name</label>
                            <div class="mt-1">
                                <input type="text" name="first_name" id="first_name" class="block w-full focus:ring-indigo-400 @error ('first_name') border-red-500 @enderror">
                            </div>
                            @error('first_name')
                            <div class="test-sm text-red-500">{{ $message }}</div>
                            @enderror
                            
                        </div>
                        <div class="sm:col-snap-6">
                            <label for="last_name" class="block text-sm font-midium text-gray-600">Last Name</label>
                            <div class="mt-1">
                                <input type="text" name="last_name" id="last_name" class="block w-full focus:ring-indigo-400 @error ('last_name') border-red-500 @enderror">
                            </div>
                            @error('last_name')
                            <div class="test-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-snap-6">
                            <label for="email" class="block text-sm font-midium text-gray-600">Email</label>
                            <div class="mt-1">
                                <input type="email" name="email" id="email" class="block w-full focus:ring-indigo-400 @error ('email') border-red-500 @enderror ">
                            </div>
                            @error('email')
                            <div class="test-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-snap-6">
                            <label for="phone_number" class="block text-sm font-midium text-gray-600">Phone Number</label>
                            <div class="mt-1">
                                <input type="text" name="phone_number" id="phone_number" class="block w-full focus:ring-indigo-400 @error ('phone_number') border-red-500 @enderror">
                            </div>
                            @error('phone_number')
                            <div class="test-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-snap-6">
                            <label for="reser_date" class="block text-sm font-midium text-gray-600">Reservation Date</label>
                            <div class="mt-1">
                                <input type="datetime-local" name="reser_date" step="3600"
                                min="{{ $min_date->format('Y-m-d\TH') }}"
                                max="{{ $max_date->format('Y-m-d\TH') }}"
                                id="reser_date" class="block w-full focus:ring-indigo-400 @error ('reser_date') border-red-500 @enderror">
                            </div>
                            @error('reser_date')
                            <div class="test-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="barber_id" class="block text-sm font-medium text-gray-700">Select Barber</label>
                            <div class="mt-1">
                                <select id="barber_id" name="barber_id" class="form-multiselect block w-full mt-1 @error ('barber_id') border-red-500 @enderror">
                                    @foreach ($barber as $emp)
                                    
                                        <option value="{{ $emp->id }}" >{{ $emp->name }}</option>
                                    @endforeach
                                </select>
                              @error('barber_id')
                            <div class="test-sm text-red-500">{{ $message }}</div>
                            @enderror
                            </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="category_id" class="block text-sm font-medium text-gray-700">Select Service</label>
                            <div class="mt-1">
                                <select id="category_id" name="category_id" class="form-multiselect block w-full mt-1 @error ('category_id') border-red-500 @enderror">
                                    @foreach ($category as $cat)
                                    
                                        <option value="{{ $cat->id }}" >{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                              @error('category_id')
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
</x-admin-layout>
