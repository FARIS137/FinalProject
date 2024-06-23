<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    protected $table = 'pengguna';

    protected $fillable = [  // Foreign key to User
    'name', 
    'username', 
    'phone', 
    'address', 
    'email', 
    'password', ];
    public $timestamps = false;

    public function pemesanan()
    {
        return $this->haveMany(Pemesanan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
