<x-guest-layout>
    <section class="mt-8 bg-white">
      <div class="mt-4 text-center">

        <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-black to-red-400">
         Meet The Staff</h2>
      </div>
      <div class="container w-full px-5 py-6 mx-auto">
          <div class="grid lg:grid-cols-4 gap-y-6">
        @foreach ( $barbers as $barber)
            
          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg"> <img class="w-full h-80 rounded-lg" src="{{ Storage::url($barber->image) }}"
              alt="Image" />
            
            <div class="px-6 py-4">
            
                <h2 class="text-3xl font-semibold text-gray-800">{{ $barber->name }}</h2>
                    <p class="my-3 leading-normal text-gray-700">{{ $barber->description }}</p>
            </div>
            <div class="flex items-center justify-between p-4">
                <a href="{{ route('reservations.step.one') }}" class="px-4 py-2 bg-red-600 text-green-50 hover:bg-red-300">Book Now!</a>
              
              
            </div>
          </div>
          
          @endforeach
        </div>
      </div>
    </section>
</x-guest-layout>