<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reservation.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\Mass::create([$request->except('_token')]);
        return redirect()->route('reservation.index')->with('data',['alert'=>'تمت الاضافة بنجاح','alert-type'=>'success']);
        //return view('reservation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mass  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Mass $reservation)
    {
        return view('reservation.show',compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mass  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Mass $reservation)
    {
        return view('reservation.edit',compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mass  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mass $reservation)
    {
        $reservation->update([$request->except('_token')]);
        return redirect()->route('reservation.index')->with('data',['alert'=>'تم التعديل بنجاح','alert-type'=>'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mass  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mass $reservation)
    {
        $reservation->delete();
        return redirect()->route('reservation.index')->with('data',['alert'=>'تم الحذف بنجاح','alert-type'=>'success']);
    }
}
