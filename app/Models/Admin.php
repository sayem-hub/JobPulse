<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function appliedJobs()
    {
        return $this->belongsToMany(Job::class, 'applied_jobs')->with('company', 'job_type:id,name')->withTimestamps();
    }

    public function resumes()
    {
        return $this->hasMany(CandidateResume::class, 'candidate_id');
    }

}
