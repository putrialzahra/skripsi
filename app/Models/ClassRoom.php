<?php

namespace App\Models;
use App\Models\AcademicYear;
use App\Models\Package;
use App\Models\Attendance;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ClassRoom extends Model
{
    protected $fillable = [
        'name',
        'academic_year_id',
        'package_id'
    ];

    /**
     * Get the academic year that owns the class room.
     */
    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class);
    }

    /**
     * Get the package that owns the class room.
     */
    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class);
    }

    /**
     * Get the attendances for the class room.
     */
    public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class, 'class_room_id');
    }

    public function students()
    {
        return $this->belongsToMany(ClassStudent::class, 'class_students', 'class_room_id', 'student_id');
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class, 'class_room_id');
    }
}
