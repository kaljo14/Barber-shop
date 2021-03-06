<?php

namespace App\Http\Controllers\Admin;

use App\Enums\BarberStatus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationStoreRequest;
use App\Models\Reservation;

use App\Models\Barber;
use App\Models\Category;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $min_date = Carbon::now();
        $barber = Barber::all();
        $category = Category::all();
        $reservation = Reservation::whereRaw('reser_date >= ? ', [$min_date])->get();
        return view('admin.reservation.index', compact('reservation', 'barber', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $barber = Barber::where('status', BarberStatus::Avaliable)->get();
        $request_status = Reservation::where('barber_id', 1)->get('reser_date');
        $min_date = Carbon::today();
        $max_date = Carbon::now()->addMonth();
        return view('admin.reservation.create', compact('barber', 'request_status', 'min_date', 'max_date', 'category'));
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
        $category = Category::findOrFail($request->category_id);
        $request_date = Carbon::parse($request->reser_date);
        //$request_status = DB::table('reservations')->where('barber_id', $request->barber_id)->get('reser_date');
        $request_status = Reservation::where('barber_id', $request->barber_id)->get('reser_date');

        //$r_status = $request_status->toArray();
        //dd($request_status);

        foreach ($barber->reservation as $res) {
            if ($res->reser_date->format('Y-m-d H') == $request_date->format('Y-m-d H')) {

                return back()
                    ->with('warning', 'This barber is not avialable at the hours: Please select a difrent barber.');
            }
        };


        Reservation::create($request->validated());

        return to_route('admin.reservation.index')->with('success', 'Reservation Created Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
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
        $barber = Barber::where('status', BarberStatus::Avaliable)->get();
        $category = Category::all();
        $min_date = Carbon::today();
        $max_date = Carbon::now()->addMonth();
        return view('admin.reservation.edit', compact('reservation', 'barber', 'min_date', 'max_date', 'category'));
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
        $request->validate([

            'email' => ['required', 'email'],
            'reser_date' => ['required', 'date', new DateBetween, new TimeBetween],
            'phone_number' => ['required'],
            'barber_id' => ['required'],
            'category_id' => ['required']
        ]);

        $barber = Barber::findOrFail($request->barber_id);
        $category = Category::findOrFail($request->category_id);


        $request_date = Carbon::parse($request->res_date);
        $reservations = $barber->reservation()->where('id', '!=', $reservation->barber_id)->get();
        foreach ($reservations as $res) {
            if ($res->reser_date->format('Y-m-d') == $request_date->format('Y-m-d')) {
                return back()->with('warning', 'This barber is reserved for this date.');
            }
        }

        $reservation->update(
            [
                'first_name' => $request->name,
                'last_name' => $request->name,
                'description' => $request->description,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'barber_id' => $request->barber_id,
                'category_id' => $request->category_id,


            ]
        );
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
