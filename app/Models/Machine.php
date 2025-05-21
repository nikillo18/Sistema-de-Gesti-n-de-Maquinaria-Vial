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
        'model'

    ];
       public function machineType()
{
    return $this->belongsTo(Machine_Type::class, 'id_type');
}
   public function assignment()
{
    return $this->hasMany(Assignment::class,'machine_id','number_serial');
}
   public function maintenance()
{
    return $this->hasMany(Maintenance::class,'machine_id','serial_number');
}





}
