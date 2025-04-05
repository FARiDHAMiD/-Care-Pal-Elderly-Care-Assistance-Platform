<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function caregivers()
    {
        return $this->belongsToMany(Caregiver::class, 'job_caregivers');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'job_services');
    }
}
