<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.reservation.index') }}" class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 rounded-lg text-white ">Reservation</a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.reservation.update',$reservation->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-snap-6">
                            <label for="name" class="block text-sm font-midium text-gray-600">First Name</label>
                            <div class="mt-1">
                                <input type="text" name="name" id="name" value="{{ $reservation->first_name }}" class="block w-full focus:ring-indigo-400 ">
                            </div>
                        </div>
                        
                        <div class="sm:col-snap-6">
                            <label for="name" class="block text-sm font-midium text-gray-600">Last Name</label>
                            <div class="mt-1">
                                <input type="text" name="name" id="name" value="{{ $reservation->last_name }}" class="block w-full focus:ring-indigo-400 ">
                            </div>
                        </div>
                        <div class="sm:col-snap-6">
                            <label for="email" class="block text-sm font-midium text-gray-600">Emial</label>
                            <div class="mt-1">
                                <input type="email" name="email" id="email" value="{{ $reservation->email }}" class="block w-full focus:ring-indigo-400 ">
                            </div>
                        </div>
                        
                         <div class="sm:col-snap-6">
                            <label for="reser_date" class="block text-sm font-midium text-gray-600">Reservation Date</label>
                            <div class="mt-1">
                                <input type="datetime-local" name="reser_date" id="reser_date" value="{{ $reservation->phone_number}}" class="block w-full focus:ring-indigo-400 ">
                            </div>
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="barber_id" class="block text-sm font-medium text-gray-700">Select Barber</label>
                            <div class="mt-1">
                                <select id="barber_id" name="barber_id" class="form-multiselect block w-full mt-1">
                                    @foreach ($barber as $emp)
                                        <option value="{{ $emp->name }}" @selected($emp->name)>{{ $emp->name }}</option>
                                    @endforeach
                                </select>
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