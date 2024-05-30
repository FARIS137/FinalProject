<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
       
        'password',
        
        'role',
        
    ];

    public $timestamps = false;

    /**
     * Check if the user has a specific role.
     *
     * @param  string  $role
     * @return bool
     */
    public function role(string $role): bool
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