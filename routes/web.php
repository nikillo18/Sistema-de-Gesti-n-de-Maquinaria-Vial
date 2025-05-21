<?php

use App\Http\Controllers\MachineController;
use Illuminate\Support\Facades\Route;

Route::get('/savemachine', function () {
    return view('SaveMachine');
});

Route::post('/save-machine', [MachineController::class, 'store']);
