<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job_Applications extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'portfolio',
        'experience',
        'resume_path',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the job that the application is for
     */
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
