<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LearnCourse extends Model
{
    protected $fillable = [
        'title',
        'description',
        'duration',
        'level',
        'rating',
        'students',
        'image'
    ];
}
