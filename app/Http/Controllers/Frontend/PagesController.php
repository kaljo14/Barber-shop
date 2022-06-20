<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Reservation;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {

        $categories = Category::all();
        return view('welcome', compact('categories'));
    }

    public function thankyou(Request $request)
    {

        $reservation = Reservation::orderBy('created_at', 'DESC')->first();
        //dd($reservation);
        return view('thankyou', compact('reservation'));
    }
}
