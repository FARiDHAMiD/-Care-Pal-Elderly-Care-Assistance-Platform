<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caregiver extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function jobs()
    {
        return $this->belongsToMany(Job::class, 'job_caregivers');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    // Services Requests
    // public function requests()
    // {
    //     return $this->hasMany(ServiceRequest::class, 'user_id');
    // }

}
