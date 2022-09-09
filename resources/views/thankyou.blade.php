<x-guest-layout>
   <div class="container w-full px-5 py-6 mx-auto">
        <div class="flex items-center min-h-screen bg-gray-50">
            <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
                <div class="flex flex-col md:flex-row">
                    <div class="h-32 md:h-auto md:w-1/2">
                        <img class="object-cover w-full h-full"
                            src="https://cdn.pixabay.com/photo/2020/09/06/22/58/barbershop-5550320_960_720.png" alt="img" />
                    </div>
                    <div class="flex  justify-center p-6 sm:p-12 md:w-1/2">
                        <div class="w-full">
                            <h3 class="mb-4 text-xl font-bold text-blue-800">Please Confirme The Reservation</h3>

                            

                            <p class="uppercase mt-20">Dear, {{ $reservation->first_name }} {{ $reservation->last_name }}  </p>
                            <p>     We will be waiting for you on {{  $reservation->reser_date->format('d-m-Y')  }} at {{ $reservation->reser_date->format('H:i ') }}</p>
                            <p>Service: {{ $reservation->category->name}}</p>
                            <p>Your Barber Is: {{ $reservation->barber->name }}</p>

                            
                               <p class="py-2r">The address is :</p><p class="  underline"> Lorem ipsum dolor sit amet consectetur adipisicing elit. ab! </p>
                        
                       

                    </div>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>