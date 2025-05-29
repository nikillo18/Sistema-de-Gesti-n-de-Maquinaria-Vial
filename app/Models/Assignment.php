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
   return $this->belongsTo(Machine::class); 
}

     public function work()
{
    return $this->belongsTo(Work::class);
}

}
