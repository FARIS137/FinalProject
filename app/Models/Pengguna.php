<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    protected $table = 'pengguna';

    protected $fillable = ['username', 'password', 'email' ,'hak_akses'];
    public $timestamps = false;

    public function pemesanan (){
        return $this->haveMany(Pemesanan::class);
    }
}
