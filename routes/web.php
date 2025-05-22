<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\WorkController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/savemachine', [MachineController::class, 'create']);
Route::post('/save-machine', [MachineController::class, 'store']);

Route::get('/savework', [WorkController::class, 'create']);
Route::post('/save-work', [WorkController::class, 'store']);

Route::get('/saveasignment', [AssignmentController::class, 'create']);
Route::post('/save-assignment', [AssignmentController::class, 'store']);
