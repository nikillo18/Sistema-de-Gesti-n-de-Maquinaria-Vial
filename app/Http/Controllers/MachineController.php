<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;
use App\Models\Machine_Type;
use App\Models\Assignment;

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
    return view('machines.Save', compact('types'));
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
    return view('machines.edit', compact('machine'));
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
public function actives()
{
    $activeas = Assignment::with(['machine', 'work'])
                ->whereNotNull('end_date')
                ->get();

    return view('machines.index', compact('activeas'));
}
public function editLimit($id)
{
    $machine = Machine::findOrFail($id);
    return view('machines.edit_limit', compact('machine'));
}

public function updateLimit(Request $request, $id)
{
    $request->validate([
        'limit_km_maintenance' => 'required|integer|min:1',
    ]);

    $machine = Machine::findOrFail($id);
    $machine->limit_km_maintenance = $request->limit_km_maintenance;
    $machine->save();

    return redirect()->route('machines.index')->with('success', 'Límite actualizado');
}
public function location()
{
    $maquinas = Machine::with(['assignment' => function ($q) {
        $q->whereNull('end_date')->with(['work.province']);
    }])->get();

    return view('machines.location', compact('maquinas'));
}


}
