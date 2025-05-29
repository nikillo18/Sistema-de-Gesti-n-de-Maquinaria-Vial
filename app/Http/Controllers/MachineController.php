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
    public function edit($id)
    {
        {
    $machine = Machine::findOrFail($id);
    return view('machines_edit', compact('machine'));
}

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'serial_number' => 'required|string|max:255',
        'model' => 'required|string|max:255',
        'type_id' => 'required|exists:machine__types,id',
    ]);

    $machine = Machine::findOrFail($id);
    $machine->update($request->all());

    return redirect()->route('machines.index')->with('success', 'Maquinaria actualizada.');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $machine = Machine::findOrFail($id);
    $machine->delete();

    return redirect()->route('machines.index')->with('success', 'Maquinaria eliminada.');
}
    
}
