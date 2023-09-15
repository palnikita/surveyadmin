<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Survey extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_event',
        'name',
        'email',
        'password',
        'address',
        
      ];
}

