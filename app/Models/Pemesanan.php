<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class pemesanan extends Model
{
    use HasFactory;
    protected $table = 'pemesanan';


    protected $fillable = ['tanggal_awal_booking', 'jam_awal_booking', 'catatan','jenis_mobil', 'noplat_mobil', 'layanan id','customer_name','foto'];
    public $timestamps = false;

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'layanan_id');
    }
}
