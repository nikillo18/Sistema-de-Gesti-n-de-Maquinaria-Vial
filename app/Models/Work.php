<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Assignment;
use App\Models\Province;
use Illuminate\Support\Facades\Http;

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
    return $this->belongsTo(Province::class);
}
  public function assignment()
{
    return $this->hasMany(Assignment::class,'work_id');
}
protected static function booted()
{
    static::creating(function ($work) {
        $query = urlencode($work->address . ', ' . $work->province->name . ', Argentina');
        $url = "https://nominatim.openstreetmap.org/search?q=$query&format=json&limit=1";

        $response = Http::get($url);

        if ($response->ok() && count($response->json()) > 0) {
            $coords = $response->json()[0];
            $work->latitude = $coords['lat'];
            $work->longitude = $coords['lon'];
        }
    });
}
}

