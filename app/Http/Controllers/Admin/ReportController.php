<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Barber;
use App\Models\Category;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
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
        }




        return view('admin.reports.index', compact('reservation', 'barber', 'salary'));
    }

    public function salary($barber)
    {
        $reservation = Reservation::where('barber_id', $barber->id)->get('category_id');

        $salary = 0;
        foreach ($reservation as $res) {
            $salary += $res->category->price;
        }

        return $salary;
    }
}
