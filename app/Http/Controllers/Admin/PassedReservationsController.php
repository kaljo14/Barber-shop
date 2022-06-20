<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Barber;
use Illuminate\Http\Request;
use App\Models\Reservation;
use Carbon\Carbon;

class PassedReservationsController extends Controller
{
    public function index()
    {
        $min_date = Carbon::now();


        $barber = Barber::all();
        $reservation = Reservation::whereRaw('reser_date <= ? ', [$min_date])->get();

        return view('admin.reservation.passed', compact('reservation', 'barber'));
    }
}
