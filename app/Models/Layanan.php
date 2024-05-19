<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class layanan extends Model
{
    use HasFactory;
    protected $table = 'layanan';

    protected $fillable = ['jenis_layanan', 'harga', 'deskripsi'];

    public $timestamps = false;

    public function pemesanan (){
        return $this->belongsTo(Pemesanan::class);
    }
}
