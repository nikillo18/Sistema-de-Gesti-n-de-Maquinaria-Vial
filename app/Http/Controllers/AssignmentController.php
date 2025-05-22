<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Machine;

class AssignmentController extends Controller
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
    $machines = Machine::all();
    $works = Work::all();

    return view('saveassignments', compact('machines', 'works'));
   }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ($request->all());
        Assignment::create([
            'machine_id'=>$request->machine_id,
            'work_id'=>$request->work_id,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'end_reason'=>$request->end_reason,
            'kilometers'=>$request->kilometers

        ]);
        return redirect()->back()->with('success', 'Máquina registrada exitosamente.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Assignment $assignment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assignment $assignment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assignment $assignment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assignment $assignment)
    {
        //
    }
}
