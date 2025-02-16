<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Challenge_Registrations extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'institution',
        'whatsapp_number',
        'experience',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the challenge that the registration is for
     */
    public function challenge()
    {
        return $this->belongsTo(Challenge::class);
    }
    
}
