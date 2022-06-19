<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\BarberStatus;
use App\Http\Controllers\Controller;
use App\Models\Barber;
use App\Models\Reservation;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function stepOne(Request $request)
    {
        $reservation = $request->session()->get('reservation');
        $min_date = Carbon::today();
        $max_date = Carbon::now()->addMonth();
        return view('reservations.step-one', compact('reservation', 'min_date', 'max_date'));
    }
    public function storeStepOne(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'reser_date' => ['required', 'date', new DateBetween, new TimeBetween],
            'phone_number' => ['required'],

        ]);
        if (empty($request->session()->get('reservation'))) {
            $reservation = new Reservation();
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
        } else {
            $reservation = $request->session()->get('reservation');
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
        }

        return to_route('reservations.step.two');
    }

    public function stepTwo(Request $request)
    {
        $reservation = $request->session()->get('reservation');
        $free_barbers = Reservation::orderBy('reser_date')->get()->filter(function ($value) use ($reservation) {
            if (isset($value->reser_date) && isset($reservation->reser_date))
                return $value->reser_date->format('Y-m-d:H') == $reservation->reser_date->format('Y-m-d:H');
        })->pluck('barber_id');
        $barber = Barber::where('status', BarberStatus::Avaliable)->whereNotIn('id', $free_barbers)->get();
        return view('reservations.step-two', compact('reservation', 'barber'));
    }

    public function storeStepTwo(Request $request)
    {
        $validated = $request->validate([
            'barber_id' => ['required']
        ]);
        $reservation = $request->session()->get('reservation');

        $reservation->fill($validated);
        $reservation->save();
        $request->session()->forget('reservation');
        return to_route('thankyou');
    }
}
