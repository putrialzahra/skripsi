<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ClassStudent;
use App\Models\Assignment;

class AssignmentSubmission extends Model
{
    protected $fillable = [
        'assignment_id',
        'student_id',
        'file',
        'score',
    
    ];
    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }
    public function student()
    {
        return $this->belongsTo(ClassStudent::class);
    }
}
