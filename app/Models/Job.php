<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'job_category_id',
        'job_type_id',
        'degree_id',
        'job_title',
        'experience_level',
        'requirements',
        'responsibilities',
        'vacancy',
        'work_place',
        'district_id',
        'division_id',
        'salary_range',
        'salary_review',
        'festival_bonus',
        'age_range',
        'gender',
        'deadline',
        'priority',
        'is_featured',
        'number_of_applications',
        'status',
        'published_at',
        'created_by',
        'updated_by'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function jobCategory()
    {
        return $this->belongsTo(JobCategory::class, 'job_category_id');
    }

    public function application()
    {
        return $this->hasMany(Application::class, 'job_id', 'id');
    }

    public function degrees()
    {
        return $this->belongsTo(Degree::class, 'degree_id');
    }

    public function jobType()
    {
        return $this->belongsTo(JobType::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'job_skills');
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
