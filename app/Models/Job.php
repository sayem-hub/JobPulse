<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

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
        return $this->belongsTo(Degree::class);
    }

    public function jobType()
    {
        return $this->belongsTo(JobType::class);
    }

}
