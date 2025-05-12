<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CalonPesertaDidik extends Model
{
    /** @use HasFactory<\Database\Factories\CalonPesertaDidikFactory> */
    use HasFactory;

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'birthplace',
        'birth_date',
        'address',
        'agama',
        'nama_ortu',
        'no_hp_ortu',
        'pendidikan_ortu',
        'pekerjaan_ortu',
        'package',
        'academic_year_id',
    ];

    public function academicYear(): BelongsTo
    {
        return $this->belongsTo(AcademicYear::class);
    }
}

