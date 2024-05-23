<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = 'pemesanan';

    protected $fillable = ['tanggal_awal_booking', 'jam_awal_booking', 'catatan', 'jenis_mobil', 'noplat_mobil','customer_name', 'layanan id'];

    public $timestamps = false;

    public function pemesanan (){
        return $this->belongsTo(Layanan::class, 'layanan_id');
}
}
