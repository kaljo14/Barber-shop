<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Barber;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Reservation;
use Carbon\Carbon;

class PassedReservationsController extends Controller
{
    public function index()
    {
        $min_date = Carbon::now();

        $categories = Category::all();
        $barber = Barber::all();
        $reservation = Reservation::whereRaw('reser_date <= ? ', [$min_date])->orderBy('reser_date', 'desc')->get();

        return view('admin.reservation.passed', compact('reservation', 'barber', 'categories'));
    }
}
