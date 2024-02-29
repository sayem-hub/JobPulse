<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'father_name',
        'mother_name',
        'date_of_birth',
        'gender',
        'marital_status',
        'nationality',
        'national_id',
        'religion',
        'contact_phone',
        'contact_email',
        'present_address',
        'permanent_address',
        'present_salary',
        'expected_salary',
        'career_objective',
        'cv',
        'image',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function experience()
    {
        return $this->hasOne(CandidateExperience::class);
    }

    public function education()
    {
        return $this->hasMany(CandidateEducation::class);
    }

    public function application()
    {
        return $this->hasMany(Application::class);
    }
}
