<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function districts()
    {
        return $this->hasMany(District::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
