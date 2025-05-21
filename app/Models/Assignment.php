<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable=[
        'id',
        'machine_id',
        'work_id',
        'start_date',
        'end_date',
        'end_reason',
        'kilometers'
     ];
        public function machine()
{
    return $this->hasMany(Machine::class,'machine_id','serial_number');
}
     public function work()
{
    return $this->belongsTo(Work::class,'work_id');
}

}
