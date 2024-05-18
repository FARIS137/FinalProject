<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    //pemanggilan table yang digunakan
    protected $table = 'pemesanan';

    //panggil kolom yg ada di tabel (sesuai yang ada di dalam tabel)
    protected $fillable = [
        'tanggal_awal_boking', 'jam_awal_boking', 'catatan', 'jenis_mobil', 'noplat_mobil', 'pelanggan_id', 'layanan_id'
    ];
    public function layanan()
    {
        return $this->hasMany(Layanan::class);
    }
}
