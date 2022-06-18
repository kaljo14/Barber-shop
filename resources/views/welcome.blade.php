<x-guest-layout>
    <!-- Main Hero Content -->
    <div
      class="container max-w-lg px-4 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center"
      style="background-image: url('https://images.pexels.com/photos/1319460/pexels-photo-1319460.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
      <h1
        class="font-mono text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-red-900 to-red-400 md:text-center sm:leading-none lg:text-5xl">
        <span class="inline md:block">Welcome To The Barber Shop</span>
      </h1>
      <div class="mx-auto mt-2 text-green-50 md:text-center lg:text-lg">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta voluptatem ab necessitatibus illo praesentium
        culpa excepturi quae commodi quaerat,
      </div>
      <div class="flex flex-col items-center mt-12 text-center">
        <span class="relative inline-flex w-full md:w-auto">
          <a href="{{ route('reservations.step.one') }}" type="button"
            class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-red-600 rounded-full lg:w-full md:w-auto hover:bg-red-300 focus:outline-none">
            Book Now !
          </a>
      </div>
    </div>
    <!-- End Main Hero Content -->
    <section class="px-2 py-32 bg-white md:px-0">
      <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
        <div class="flex flex-wrap items-center sm:-mx-3">
          <div class="w-full md:w-1/2 md:px-3">
            <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
              <!-- <h1
              class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
            > -->
              <h3 class="text-xl">OUR STORY
              </h3>
              <h2 class="text-4xl text-red-600">Welcome</h2>
              <!-- </h1> -->
              <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nemo incidunt praesentium, ipsum
                culpa minus eveniet, id nesciunt excepturi sit voluptate repudiandae. Explicabo, incidunt quia.
                Repellendus mollitia quaerat est voluptas!
              </p>
              <div class="relative flex">
                <a href="#_"
                  class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-red-600 rounded-md sm:mb-0 hover:bg-black sm:w-auto">
                  Read More
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2">
            <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
              <img src="https://images.pexels.com/photos/1813272/pexels-photo-1813272.jpeg" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-20 bg-black">
      <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
        <div class="flex flex-wrap items-center -mx-3">
          <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
            <div class="w-full lg:max-w-md">
              <h2 class="mb-4 text-2xl text-white font-bold">About Us</h2>
              <h2
                class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-white to-red-700">
                WHY CHOOSE US?</h2>

              <p class="mb-4 font-medium tracking-tight text-gray-200 xl:mb-6">Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Natus hic atque magni minus aliquam, eos quam incidunt nam iusto sunt voluptates
                inventore a veritatis doloremque corrupti. Veritatis est expedita cupiditate!</p>
              <ul>
                
                <li class="flex items-center py-2 space-x-4 xl:py-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <span class="font-medium text-gray-500">Easy Payments</span>
                </li>
                <li class="flex items-center py-2 space-x-4 xl:py-3">
                  <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                    </path>
                  </svg>
                  <span class="font-medium text-gray-500">100% Protection and Security for Your App</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="w-full px-3 mb-12 lg:w-1/2 order-0 rounded-lg  "><img
              class="mx-auto sm:max-w-sm lg:max-w-full rounded-md "
              src="https://images.pexels.com/photos/1319459/pexels-photo-1319459.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="feature image"></div>
        </div>
      </div>
    </section>
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