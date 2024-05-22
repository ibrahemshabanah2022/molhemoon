<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MolhemoonInternship extends Model
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

    public function users()
    {
        return $this->belongsToMany(User::class, 'molhemoon_internship_user');
    }
}
