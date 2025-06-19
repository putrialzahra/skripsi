<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //
    protected $fillable = [
        'name',
        'price',
        'description',
    ];

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function classRooms()
    {
        return $this->hasMany(ClassRoom::class);
    }

    
}
