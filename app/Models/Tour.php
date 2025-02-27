<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Tour extends Model
{
    use HasFactory;

    // protected $fillable = [];

    protected $guarded = [];

    protected $casts = [
        'itinerary' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
