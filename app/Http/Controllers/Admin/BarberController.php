<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barber;
use App\Http\Requests\BarberRequest;
use Illuminate\Support\Facades\Storage;

class BarberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barber = Barber::all();
        return view('admin.barber.index', compact('barber'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.barber.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BarberRequest $request)
    {
        $image = $request->file('image')->store('public/barbers');
        Barber::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'status' => $request->status,
        ]);
        return to_route('admin.barber.index')->with('success', 'Barber Created Successfuly');
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
    public function edit(Barber $barber)
    {
        return view('admin.barber.edit', compact('barber'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barber $barber)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $image = $barber->image;
        if ($request->hasFile('image')) {
            Storage::delete([$barber->image]);
            $image = $request->file('image')->store('public/barbers');
        }

        $barber->update(
            [
                'name' => $request->name,
                'description' => $request->description,
                'image' => $image,
                'status' => $request->status
            ]
        );
        return to_route('admin.barber.index')->with('success', 'Barber Updated Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barber $barber)
    {
        Storage::delete($barber->image);

        $barber->delete();
        return to_route('admin.barber.index')->with('danger', 'Barber Deleted');
    }
}
