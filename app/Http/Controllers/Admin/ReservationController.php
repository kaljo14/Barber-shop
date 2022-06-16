<?php

namespace App\Http\Controllers\Admin;

use App\Enums\BarberStatus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationStoreRequest;
use App\Models\Reservation;

use App\Models\Barber;
use Carbon\Carbon;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barber = Barber::all();
        $reservation = Reservation::all();
        return view('admin.reservation.index', compact('reservation', 'barber'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barber = Barber::where('status', BarberStatus::Avaliable)->get();
        return view('admin.reservation.create', compact('barber'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationStoreRequest $request)
    {
        $barber = Barber::findOrFail($request->barber_id);
        $request_date = Carbon::parse($request->reser_date);
        foreach ($barber->reservation as $res) {
            if ($res->reser_date->format('Y-m-d H:m') == $request_date->format('Y-m-d H:m')) {
                $barber->update(['status' => BarberStatus::Unavaliable]);
                return back()->with('warning', 'Please select a difrent barber');
            }
        };

        Reservation::create($request->validated());
        return to_route('admin.reservation.index')->with('success', 'Reservation Created Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        $barber = Barber::all();
        return view('admin.reservation.edit', compact('reservation', 'barber'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {

        return to_route('admin.reservation.index')->with('success', 'Reservation Updated Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return to_route('admin.reservation.index')->with('danger', 'Reservation Removed');
    }
}
