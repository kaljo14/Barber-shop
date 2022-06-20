<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
       <div class="flex-col w-full md:flex md:flex-row md:min-h-screen">
        <div class="flex flex-col flex-shrink-0  bg-slate-100 w-full  md:w-64 border-r">
          <h2 class="my-5 mx-5 text-5xl  font-['Georgia'] font-bold text-black-500">Barber Shop
          </h2>


          <div class="flex flex-col   justify-between mt-6">
            <aside>
              <ul>
               
                
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200 focus:bg-gray-600 focus:text-white" 
                href="{{ route('admin.categories.index') }}">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"  
                    stroke="currentColor">
                   
                  </svg>

                
                 Services
                </a>
              </li>
              
              <li>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200 focus:bg-gray-600 focus:text-white" 
                href="{{ route('admin.barber.index') }}">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"  
                    stroke="currentColor">
                </svg>
                 Barber
                </a>
              </li>
              <li>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200 focus:bg-gray-600 focus:text-white"
                href="{{ route('admin.reservation.index') }}">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"  
                    stroke="currentColor"></svg>

                 Reservation
                </a>
              </li>
           
             

              <li>
                 <div @click.away="open = false" class="px-5 relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex  items-center w-full px-5 py-2 mt-5  text-gray-600 text-left bg-transparent rounded-lg md:block hover:text-gray-600 focus:text-gray-600 hover:bg-gray-200  focus:outline-none focus:shadow-outline">
                        <span>{{ Auth::user()->name }}</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                 <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                        <div class="px-2 py-2 bg-white rounded-md shadow ">
                  <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                      </div>
                    </div>
               
              </li>
              
            </ul>

          </aside>
          
        </div>
      </div>
     
          <main class="m-2 p-8 w-full">
            <div>
                @if (session()->has('danger'))
                    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                        role="alert">
                        <span class="font-medium">{{ session()->get('danger') }}!</span>
                    </div>
                @endif
                @if (session()->has('success'))
                    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                        role="alert">
                        <span class="font-medium">{{ session()->get('success') }}!</span>
                    </div>
                @endif
                @if (session()->has('warning'))
                    <div class="p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800"
                        role="alert">
                        <span class="font-medium">{{ session()->get('warning') }}!</span>
                    </div>
                @endif
            </div>
            {{ $slot }}
          </main>
      
    </body>
</html>
