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
        $request->validate([
        'machine_id' => 'required|exists:machines,id',
        'work_id' => 'required|exists:works,id',
        'start_date' => 'required', 'date',
        'end_date' => 'nullable|date|after_or_equal:start_date',
        'end_reason' => 'nullable|string',
        'kilometers' => 'nullable|integer|min:0',
    ]);

    $machineId = $request->machine_id;

    $ultimaAsignacion = Assignment::where('machine_id', $machineId)
                            ->latest('start_date')
                            ->first();

    // ✅ Validar si hay asignación activa
    if ($ultimaAsignacion && $ultimaAsignacion->end_date === null) {
        return redirect()->back()->withErrors('La máquina ya está asignada a otra obra.');
    }

    // ✅ Validar que la anterior tenga km y fin
    if ($ultimaAsignacion && ($ultimaAsignacion->kilometers === null || $ultimaAsignacion->end_reason === null)) {
        return redirect()->back()->withErrors('La última asignación de la máquina no tiene kilómetros o motivo de fin cargados.');
    }

    Assignment::create([
        'machine_id' => $machineId,
        'work_id' => $request->work_id,
        'start_date' => $request->start_date,
        'end_date' => $request->end_date, // puede ser null
        'end_reason' => $request->end_reason,
        'kilometers' => $request->kilometers,
    ]);

    return redirect()->back()->with('success', 'Asignación creada correctamente.');
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
    public function actives()
{
    $activas = Assignment::with(['machine', 'work'])
                ->whereNull('end_date')
                ->get();

    return view('machines_active', compact('activas'));
}
public function history($id)
{
    $machine = Machine::findOrFail($id);
    $historial = Assignment::with('work')
                ->where('machine_id', $id)
                ->orderBy('start_date', 'asc')
                ->get();

    return view('machine_history', compact('machine', 'historial'));
}
public function finalizeForm()
{
    // Trae solo asignaciones activas
    $asignaciones = Assignment::with('machine', 'work')
                    ->whereNull('end_date')
                    ->get();

    return view('finalize_assignment', compact('asignaciones'));
}

public function finalize(Request $request)
{
    $request->validate([
        'assignment_id' => 'required|exists:assignments,id',
        'end_date' => 'required|date|before_or_equal:today',
        'end_reason' => 'required|string|max:255',
        'kilometers' => 'required|integer|min:0',
    ]);

    $assignment = Assignment::findOrFail($request->assignment_id);

    if ($assignment->end_date !== null) {
        return redirect()->back()->withErrors('Esta asignación ya fue finalizada.');
    }

    $assignment->update([
        'end_date' => $request->end_date,
        'end_reason' => $request->end_reason,
        'kilometers' => $request->kilometers,
    ]);

    return redirect()->route('assignments.finalizeForm')->with('success', 'Asignación finalizada correctamente.');
}
public function listMachines()
{
    $machines = Machine::all();
    return view('machines_index', compact('machines'));
}


}
