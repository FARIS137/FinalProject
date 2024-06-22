<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = ['tanggal_transaksi', 'metode_pembayaran', 'bukti_bayar' ,'total_biaya', 'pemesanan id'];
    public $timestamps = false;

    public function pemesanan (){
        return $this->belongsTo(Pemesanan::class,'pemesanan_id');
    }
}