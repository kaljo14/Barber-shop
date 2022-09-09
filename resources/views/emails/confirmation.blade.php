@component('mail::message')
# Your Reservations Has Been Made !



      Name: {{ $reservation->first_name }}  {{ $reservation->last_name }}
      Time: {{ $reservation->reser_date->format('d-m-Y/H:i' )}}
      Service: {{ $reservation->category->name }}

@component('mail::button', ['url' => 'http://127.0.0.1:8000'])
Go to the website.

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
