<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fuel extends Model
{
    use HasFactory;
    protected $fillable = [
        'forestDistance',
        'cookingFrequency',
        'cookingHours',
        'cookingLocation',
        'cookstoveType',
        'fuelType',
        'firewoodSource',
        'problems',
    ];


   // protected $table = 'fuels'; 
}
