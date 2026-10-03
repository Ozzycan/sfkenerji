<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnergyPackage extends Model
{
    protected $fillable = [
        'title', 
        'category', 
        'description', 
        'price', 
        'image',
        'kva_badge',
        'type_badge',
        'daily_production',
        'is_popular',
        'features'
    ];

    protected $casts = [
        'is_popular' => 'boolean',
        'features' => 'array',
    ];
}
