<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {

        $categories = Category::all();
        return view('welcome', compact('categories'));
    }

    public function thankyou()
    {

        $categories = Category::all();
        return view('thankyou', compact('categories'));
    }
}
