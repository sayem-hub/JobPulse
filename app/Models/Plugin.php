<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plugin extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_status',
        'blog_status',
        'pages_status',
        'company_id',
        'user_id'
    ];

   
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
