<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\MachineTypeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/savemachine', [MachineController::class, 'create'])->name('machines.create');
    Route::post('/save-machine', [MachineController::class, 'store'])->name('machines.store');
    Route::get('/maquinarias/{id}/editar', [MachineController::class, 'edit'])->name('machines.edit');
    Route::put('/maquinarias/{id}', [MachineController::class, 'update'])->name('machines.update');
    Route::delete('/maquinarias/{id}', [MachineController::class, 'destroy'])->name('machines.destroy');
    Route::get('/maquina/{id}/historial', [AssignmentController::class, 'history'])->name('machines.history');
    Route::get('/maquinas-activas', [AssignmentController::class, 'actives'])->name('assignments.actives');
    Route::get('/maquinas', [AssignmentController::class, 'listMachines'])->name('machines.index');
    Route::get('/machines/{id}/limit', [MachineController::class, 'editLimit'])->name('machines.editLimit');
    Route::post('/machines/{id}/limit', [MachineController::class, 'updateLimit'])->name('machines.updateLimit');
    Route::get('/location', [MachineController::class, 'location'])->name('machines.location');
    Route::get('/create-machineType', function () {
    return view('machines.Type'); })->name('machinetype.create');
    Route::post('/save-machineType', [MachineTypeController::class, 'store'])->name('machinetype.store');

 



    Route::get('/savework', [WorkController::class, 'create'])->name('works.create');
    Route::post('/save-work', [WorkController::class, 'store'])->name('works.store');
    Route::get('/works/{id}/editar', [WorkController::class, 'edit'])->name('works.edit');
    Route::put('/works/{id}', [WorkController::class, 'update'])->name('works.update');
    Route::delete('/works/{id}', [WorkController::class, 'destroy'])->name('works.destroy');
    Route::get('/works', [WorkController::class, 'index'])->name('works.index');



    Route::get('/reports/provinces', [ReporteController::class, 'index'])->name('reports.index');
    Route::get('/reports/provinces/{id}', [ReporteController::class, 'show'])->name('reports.provincia');
    Route::get('/reports/provinces/{id}/pdf', [ReporteController::class, 'pdf'])->name('reports.pdf');

    Route::get('/saveassignment', [AssignmentController::class, 'create'])->name('assignments.create');
    Route::post('/save-assignment', [AssignmentController::class, 'store'])->name('assignments.store');
    Route::get('/assignments/finalizar', [AssignmentController::class, 'finalizeForm'])->name('assignments.finalizeForm');
    Route::post('/assignments/finalizar', [AssignmentController::class, 'finalize'])->name('assignments.finalize');
    Route::delete('/assignments/{id}', [AssignmentController::class, 'destroy'])->name('assignments.destroy');
    Route::put('/assignments/{id}', [AssignmentController::class, 'update'])->name('assignments.update');
    Route::get('/assignments/{id}/editar', [AssignmentController::class, 'edit'])->name('assignments.edit');
    Route::get('/assignments', [AssignmentController::class, 'index'])->name('assignments.index');

    Route::get('/maquinas/{id}/mantenimientos', [MaintenanceController::class, 'show'])->name('maintenances.show');
    Route::get('/maquinas/{id}/mantenimientos/nuevo', [MaintenanceController::class, 'create'])->name('maintenances.create');
    Route::post('/mantenimientos', [MaintenanceController::class, 'store'])->name('maintenances.store');
});

require __DIR__.'/auth.php';
