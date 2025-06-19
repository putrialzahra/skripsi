<?php

namespace App\Models;
use App\Models\ClassRoom;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class ClassTeacher extends Model
{
    protected $fillable = [
        'class_room_id',
        'teacher_id',
    ];

    public function classRoom()
    {
        return $this->belongsTo(ClassRoom::class);
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function students()
    {
        return $this->belongsToMany(User::class, 'class_students', 'class_room_id', 'student_id');
    }


}


