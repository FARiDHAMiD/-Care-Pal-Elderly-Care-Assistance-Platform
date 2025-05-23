<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function jobs()
    {
        return $this->hasMany(Job::class, 'client_id');
    }


    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
