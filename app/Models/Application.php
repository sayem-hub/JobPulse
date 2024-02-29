<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;


    protected $fillable = [
        'job_id',
        'company_id',
        'candidate_id',
        'cover_letter',
        'expected_salary',
        'interview_status',
        'interview_date',
        'status',
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id', 'id');
    }

}
