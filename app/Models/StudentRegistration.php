<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRegistration extends Model
{
    /** @use HasFactory<\Database\Factories\StudentRegistrationFactory> */
    use HasFactory;

    protected $fillable = [
        'nama',
        'birthplace',
        'birth_date',
        'address',
        'agama',
        'nama_ortu',
        'no_hp_ortu',
        'pendidikan_ortu',
        'pekerjaan_ortu',
        'package',
    ];
}
