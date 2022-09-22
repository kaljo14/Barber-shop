<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Barber;
use App\Models\Category;
use App\Models\Reports;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $barber = Barber::all();



        //$categories = Category::select('id', 'price')->get();
        foreach ($barber as $bar) {
            $salary = 0;
            $reservation = Reservation::where('barber_id', $bar->id)->get('category_id');
            foreach ($reservation as $res) {
                $salary += $res->category->price;
            }
            Reports::create([
                'barber_id' => $bar->id,
                'month' => Carbon::now(),
                'salary' => $salary
            ]);
        }


        return view('admin.reports.index', compact('reservation', 'barber', 'salary'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $barber = Barber::all();
        foreach ($barber as $bar) {
            $salary = 0;
            $reservation = Reservation::where('barber_id', $bar->id)->get('category_id');
            foreach ($reservation as $res) {
                $salary += $res->category->price;
            }
        };


        route('admin.repots.store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barber = Barber::findOrFail($request->barber_id);
        $salary = $request->salary;
        Reports::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function show(Reports $reports)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function edit(Reports $reports)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reports $reports)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reports $reports)
    {
        //
    }
}
