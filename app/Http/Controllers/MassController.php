<?php

namespace App\Http\Controllers;

use App\Mass;
use Illuminate\Http\Request;

class MassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mass.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mass.create');
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
        return redirect()->route('mass.index')->with('data',['alert'=>'تمت الاضافة بنجاح','alert-type'=>'success']);
        //return view('mass.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mass  $mass
     * @return \Illuminate\Http\Response
     */
    public function show(Mass $mass)
    {
        return view('mass.show',compact('mass'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mass  $mass
     * @return \Illuminate\Http\Response
     */
    public function edit(Mass $mass)
    {
        return view('mass.edit',compact('mass'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mass  $mass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mass $mass)
    {
        $mass->update([$request->except('_token')]);
        return redirect()->route('mass.index')->with('data',['alert'=>'تم التعديل بنجاح','alert-type'=>'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mass  $mass
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mass $mass)
    {
        $mass->delete();
        return redirect()->route('mass.index')->with('data',['alert'=>'تم الحذف بنجاح','alert-type'=>'success']);
    }
}
