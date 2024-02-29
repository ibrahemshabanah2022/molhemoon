<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OthercompaniesInternship extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'experience_needed',
        'career_level',
        'education_level',
        'salary',
        'description',
        'requirements',
    ];

    protected $casts = [
        'career_level' => 'string',
        'education_level' => 'string',
        'salary' => 'decimal:2',
    ];
}
