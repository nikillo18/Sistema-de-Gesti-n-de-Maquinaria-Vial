<?php

use App\Http\Controllers\MachineController;
use Illuminate\Support\Facades\Route;

Route::get('/savemachine', [MachineController::class, 'create']);
Route::post('/save-machine', [MachineController::class, 'store']);
