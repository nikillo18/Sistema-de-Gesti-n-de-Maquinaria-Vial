<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use Illuminate\Http\Request;
use App\Models\Machine;

class MaintenanceController extends Controller
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
   public function create($machine_id)
    {
        $machine = Machine::findOrFail($machine_id);
        return view('maintenances.create', compact('machine'));
    }
    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
        $request->validate([
            'machine_id' => 'required|exists:machines,id',
            'date' => 'required|date|',
            'description' => 'required|string|max:255',
            'kilometers_maintainance' => 'required|integer|min:0',
        ]);

        Maintenance::create($request->all());

        return redirect()->route('machines.index')->with('success', 'Mantenimiento registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    
    public function show($machine_id)
    {
        $machine = Machine::with('maintenances')->findOrFail($machine_id);
        return view('maintenances.show', compact('machine'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Maintenance $maintenance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Maintenance $maintenance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Maintenance $maintenance)
    {
        //
    }
}
