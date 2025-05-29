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
        $works = Work::all();
        return view('works_index', compact('works'));
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
    Work::create([
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
    public function edit($id)
    {
         $work = Work::findOrFail($id);
    return view('works_edit', compact('work'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Work $work,$id)
    {
        $request->validate([
        'name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'province_id' => 'required|exists:province_id,id',
        ]);
            $work= Work::findOrFail($id);
            $work->update($request->all());

    return redirect()->route('works.index')->with('success', 'Obra Actualizada.');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $work=Work::findOrfail($id);
        $work->delete();

        return redirect()->route('works.index')->with('success', 'Obra Eliminada.');

    }
}
