<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'industry',
        'description',
        'website',
        'founded_year',
        'company_size',
        'headquarters',
        'company_logo',
        'linkedin',
        'twitter',
        'facebook',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function jobApplications()
    {
        return $this->hasMany(Job_Applications::class);
    }

    /**
     * Get all challenge registrations for the user
     */
    public function challengeRegistrations()
    {
        return $this->hasMany(Challenge_Registrations::class);
    }

    /**
     * Get pending job applications
     */
    public function pendingApplications()
    {
        return $this->jobApplications()->where('status', 'pending');
    }

    /**
     * Get accepted job applications
     */
    public function acceptedApplications()
    {
        return $this->jobApplications()->where('status', 'accepted');
    }

    /**
     * Get active challenge registrations
     */
    public function activeChallengRegistrations()
    {
        return $this->challengeRegistrations()
            ->whereHas('challenge', function($query) {
                $query->where('active', true)
                    ->where('end_date', '>=', now());
            });
    }

}
