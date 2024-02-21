<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = ['company_id', 'job_category_id', 'job_type_id', 'degree_id', 'job_title', 'job_description', 'vacancy', 'job_location', 'min_salary', 'max_salary', 'deadline', 'is_featured', 'status'];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function jobCategory()
    {
        return $this->belongsTo(JobCategory::class, 'job_category_id');
    }

    public function appliedJobs()
    {
        return $this->hasMany(JobApplication::class, 'job_id', 'id');
    }

    public function degrees()
    {
        return $this->belongsTo(Degree::class, 'degree_id');
    }

    public function jobType()
    {
        return $this->belongsTo(JobType::class);
    }

}
