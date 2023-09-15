<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'respondent_name',
        'age',
        'sex',
        'location',
        'phone',
        'occupation',
        'income',
        'economic_class',
        'adult_members',
        'children',
        'documents',
        'document_number',
    ];

}
