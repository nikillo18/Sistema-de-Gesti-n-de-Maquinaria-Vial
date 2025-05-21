<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;
use App\Models\Machine_Type;

class MachineController extends Controller
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
    $types = Machine_Type::all();
    return view('SaveMachine', compact('types'));
}

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    //dd($request->all());

    Machine::create([
        'serial_number' => $request->serial_number,
        'type_id' => $request->type_id,
        'model' => $request->model,
    ]);

    return redirect()->back()->with('success', 'Máquina registrada exitosamente.');
}

    /**
     * Display the specified resource.
     */
    public function show(Machine $machine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Machine $machine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Machine $machine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Machine $machine)
    {
        //
    }
    
}
