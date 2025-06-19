<?php

namespace App\Models;

use App\Models\Package;
use App\Models\Assignment;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
        'package_id',
    ];

    public function package()       
    {
        return $this->belongsTo(Package::class);
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class, 'subject_id');
    }
}
