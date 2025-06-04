<?php

namespace App\Http\Controllers;

use App\Models\Machine_Type;
use Illuminate\Http\Request;

class MachineTypeController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            Machine_Type::create([
        'name' => $request->name,
    ]);

    return redirect()->back()->with('success', 'Tipo Máquina registrada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Machine_Type $machine_Type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Machine_Type $machine_Type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Machine_Type $machine_Type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Machine_Type $machine_Type)
    {
        //
    }
}
