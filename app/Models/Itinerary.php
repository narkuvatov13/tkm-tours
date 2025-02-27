<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected $casts = [
        'itinerary' => 'array'
    ];


    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
