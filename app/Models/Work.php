<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Assignment;
use App\Models\Province;

class Work extends Model
{
     protected $fillable=[
        'id',
        'name',
        'address',
        'province_id',
        'start_date',
        'end_date'
     ];

       public function province()
{
    return $this->belongsTo(Province::class,'province_id');
}
  public function assignment()
{
    return $this->hasMany(Assignment::class,'work_id');
}
}

