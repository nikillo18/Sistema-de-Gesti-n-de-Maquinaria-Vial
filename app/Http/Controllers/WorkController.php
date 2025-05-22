<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use App\Models\Province;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        {
    $provinces = Province::all();
    return view('savework', compact('provinces'));
}
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    //dd($request->all());
    work::create([
        'address' => $request->address,
        'name'=>$request->name,
        'province_id' => $request->province_id,
        'start_date' => $request->start_date,
        'end_date'=>$request->end_date
        
    ]);
        return redirect()->back()->with('success', 'Máquina registrada exitosamente.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Work $work)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Work $work)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Work $work)
    {
        //
    }
}
