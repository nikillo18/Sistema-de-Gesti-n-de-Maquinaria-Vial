<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $fillable = [
        'id',
        'date',
        'description',
        'kilometers_maintainance',
        'machine_id'
    ];
     public function machine()
    {
        return $this->belongsTo(Machine::class);
    }
}
