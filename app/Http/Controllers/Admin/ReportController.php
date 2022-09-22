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

        $reservation = Reservation::where('barber_id', 3)->get('category_id');
        $categories = Category::select('id', 'price')->get();
        $salary = 0;
        foreach ($reservation as $res) {
            $salary += $res->category->price;
        }

        return view('admin.reports.index', compact('reservation', 'barber', 'salary'));
    }
}
