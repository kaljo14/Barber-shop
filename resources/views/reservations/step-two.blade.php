<x-guest-layout>
   <div class="container w-full px-5 py-6 mx-auto">
        <div class="flex items-center min-h-screen bg-gray-50">
            <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
                <div class="flex flex-col md:flex-row">
                    <div class="h-32 md:h-auto md:w-1/2">
                        <img class="object-cover w-full h-full"
                            src="https://cdn.pixabay.com/photo/2020/09/06/22/58/barbershop-5550320_960_720.png" alt="img" />
                    </div>
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                        <div class="w-full">
                            <h3 class="mb-4 text-xl font-bold text-blue-800">Make Reservation</h3>

                            <div class="w-full bg-gray-200 rounded-full">
                                <div
                                    class="w-100 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-blue-800 rounded-full">
                                    Step2</div>
                            </div>

                            <form method="POST"  action="{{ route('reservations.store.step.two') }}">
                                @csrf
                                <div class="sm:col-span-6 p-3">
                                    <label for="first_name" class="block text-sm font-medium text-gray-700"> Select a Barber
                                    </label>
                                    <div class="mt-1">
                                <select id="barber_id" name="barber_id" class="form-multiselect block w-full mt-1 @error ('barber_id') border-red-500 @enderror">
                                    @foreach ($barber as $emp)
                                    
                                        <option value="{{ $emp->id }}" >{{ $emp->name }}</option>
                                    @endforeach
                                </select>
                                
                                
                                
                                <div class="mt-6  flex justify-between">
                                    <a href="{{ route('reservations.step.one') }}" class="px-4 py-2 bg-blue-800 hover:bg-red-800 rounded-lg text-white">Back</a>

                                    <button type="submit"
                                        class="px-4 py-2 bg-blue-800 hover:bg-red-800 rounded-lg text-white">Make Reservation</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>