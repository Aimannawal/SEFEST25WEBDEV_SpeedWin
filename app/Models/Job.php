<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'title', 'company', 'location', 'job_type', 'description',
        'responsibilities', 'qualifications', 'salary_range',
        'application_deadline', 'active'
    ];
}
