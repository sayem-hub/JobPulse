<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'role',
        'password',
        'profile_pic',
        'is_resume_created',
        'is_active',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function userCompany()
    {
        return $this->hasMany(Company::class);
    }

    public function userJob()
    {
        return $this->hasMany(Job::class);
    }

    public function userApplication()
    {
        return $this->hasMany(Application::class);
    }

    public function userCandidate()
    {
        return $this->hasMany(Candidate::class);
    }

    public function education()
    {
        return $this->hasMany(CandidateEducation::class);
    }

    public function experience()
    {
        return $this->hasMany(CandidateExperience::class);
    }

    public function plugin()
    {
        return $this->hasOne(Plugin::class, 'user_id');
    }

    
}
