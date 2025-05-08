<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{

    public function isAdmin()
    {
        return $this->role === self::ROLE_ADMIN;
    }
    protected $guard_name = 'web'; // Pastikan ini sesuai dengan konfigurasi guard

      // Relasi dengan tabel roles (Many-to-Many)
      public function roles()
      {
          return $this->belongsToMany(HasRoles::class);
      }

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;
    
    //Admin
    //user

    // role

    const ROLE_ADMIN = 'admin';
    const ROLE_USER = 'user';

    const ROLE = [
        self::ROLE_ADMIN => 'Admin',
        self::ROLE_USER => 'User',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];


    }
}
