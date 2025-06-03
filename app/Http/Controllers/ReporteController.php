<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Province;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Machine;


class ReporteController extends Controller
{
   public function index()
{
    $provincias = Province::all();
    return view('reports.index', compact('provincias'));
}
public function show($id)
{
    $provincia = Province::findOrFail($id);

    $obras = Work::where('province_id', $id)
        ->whereMonth('created_at', Carbon::now()->month)  
        ->get();

    return view('reports.show', compact('provincia', 'obras'));
}

public function pdf($id)
{
    $provincia = Province::findOrFail($id);
    $obras = Work::where('province_id', $id)
        ->whereMonth('created_at', Carbon::now()->month)
        ->get();

    $pdf = Pdf::loadView('reports.pdf', compact('provincia', 'obras'));
    return $pdf->download("reporte_{$provincia->name}.pdf");
}



}
