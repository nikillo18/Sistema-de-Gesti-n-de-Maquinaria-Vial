<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\work;

class Province extends Model
{
     protected $fillable=[
        'id',
        'name'
     ];
       public function work()
{
    return $this->hasMany(Work::class,'province_id');
}
}
