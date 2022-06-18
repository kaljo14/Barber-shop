<x-guest-layout>
    <section class="mt-8 bg-white">
      <div class="mt-4 text-center">

        <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-black to-red-400">
         The Barber's Services</h2>
      </div>
      <div class="container w-full px-5 py-6 mx-auto">
          <div class="grid lg:grid-cols-4 gap-y-6">
        @foreach ( $categories as $category)
            
          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-80 rounded-lg" src="{{ Storage::url($category->image) }}"
              alt="Image" />
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <h4 class="px-4 py-0.5 text-center bg-black rounded-full text-xl font-semibold tracking-tight text-white uppercase">{{ $category->name }}</h4>
              </div>

              <p class="leading-normal text-gray-700">{{ $category->description }}</p>
            </div>
            <div class="flex items-center justify-between p-4">
                <a href="{{ route('reservations.step.one') }}" class="px-4 py-2 bg-red-600 text-green-50 hover:bg-red-300">Book Now!</a>
              
              <span class="text-xl text-black">{{ $category->price }} BGN</span>
            </div>
          </div>
          
          @endforeach
        </div>
      </div>
    </section>
</x-guest-layout>