<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationStoreRequest;
use App\Models\Reservation;

use App\Models\Barber;

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
        $reservation= Reservation::all();
         return view('admin.reservation.index',compact('reservation','barber'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barber = Barber::all();
        return view('admin.reservation.create',compact('barber'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationStoreRequest $request)
    {
        Reservation::create($request->validated());
        return to_route('admin.reservation.index');
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
        $barber=Barber::all();
         return view('admin.reservation.edit',compact('reservation','barber'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Reservation $reservation)
    {
       $request->validate([
            'firs_name'=>'required',
            'last_name'=>'required',
        
        ]);
        

        $reservation->update(
            [
                'firs_name'=> $request->name,
                'last_name'=> $request->name,
                'emial'=> $request->emial,
                'phone_number'=>$request->phone_number,
                'reserv_date'=>$request->reser_date,
                'barber_id'=>$request->barber_id,
            ]
            );
            return to_route('admin.reservation.index');
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
        return to_route('admin.reservation.index');
    }
}
