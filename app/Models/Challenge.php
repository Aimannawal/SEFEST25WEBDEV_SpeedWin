<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    protected $fillable = ['title', 'type', 'description', 'requirements', 'evaluation_criteria', 'start_date', 'end_date', 'prize_description', 'active'];

    public function registrations()
    {
        return $this->hasMany(Challenge_Registrations::class);
    }
}
