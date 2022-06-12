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
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200 focus:bg-gray-600 focus:text-white" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"  stroke="currentColor">
                    </svg>
                  {{ Auth::user()->name }}
                  <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                      
                </a>
              </li>
              
            </ul>

          </aside>
          
        </div>
      </div>
     
          <main class="m-2 p-8 w-full">
            {{ $slot }}
          </main>
      
    </body>
</html>
