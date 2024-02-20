<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_email',
        'company_phone',
        'company_address',
        'company_country',
        'industry_type',
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
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class, 'company_id');
    }
}
