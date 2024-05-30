<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'verified_at',
        'password',
        'remember_token',
        'role',
        'is_active'
    ];

    public $timestamps = false;

    /**
     * Check if the user has a specific role.
     *
     * @param  string  $role
     * @return bool
     */
    public function hasRole(string $role): bool
    {
        return $this->role === $role;
    }


    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
