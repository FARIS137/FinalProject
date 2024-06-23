<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransaksiPem extends Model
{
    // Set the table property to reference the view
    protected $view = 'transaksipem';

    // Optionally, disable timestamps if they are not part of the view
    public $timestamps = false;

    // Specify the primary key if it is not 'id'

    // Add other properties if needed, like fillable, guarded, etc.
    protected $fillable = [
        'pemesanan_id', 'tanggal_awal_booking', 'jam_awal_booking', 'catatan',
        'jenis_mobil', 'noplat_mobil', 'customer_name', 'metode_pembayaran', 'total_harga',
        'layanan_id', 'harga'
    ];
}
