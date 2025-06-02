<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Machine_Type;
use App\Models\Assignment;
use App\Models\Maintenance;


class Machine extends Model
{
    protected $fillable = [
        'id',
        'serial_number',
        'type_id',
        'model',
        'kilometers_present',
        'limit_km_maintenance'

    ];
       public function machineType()
{
    return $this->belongsTo(Machine_Type::class, 'type_id');
}
   public function assignment()
{
   return $this->hasMany(Assignment::class);
}
   public function maintenances()
{
    return $this->hasMany(Maintenance::class);
}





}
