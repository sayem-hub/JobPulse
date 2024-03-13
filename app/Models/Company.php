<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'organization_type',
        'company_name',
        'company_email',
        'company_phone',
        'district_id',
        'division_id',
        'company_address',
        'company_country',
        'company_business',
        'establishment_date',
        'company_size',
        'logo',
        'website',
        'user_id',
        'bio',
        'vision',
        'facebook_url',
        'twitter_url',
        'linkedin_url',
        'is_verified',
        'is_featured',
        'is_active',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class, 'company_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

}
