<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Pemesanan;
use App\Models\Pengguna;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $layanan = Layanan::count();
        $pemesanan = Pemesanan::count();
        $transaksi = Transaksi::count();
        $pengguna = Pengguna::count();
        $pemesananData = Pemesanan::select('tanggal_awal_booking', 'layanan_id')->get();

        $jenis_mobil = DB::table('pemesanan')
            ->selectRaw('jenis_mobil, count(jenis_mobil) as jumlah')
            ->groupBy('jenis_mobil')
            ->get();

        return view('admin.dashboard', compact('layanan', 'pemesanan', 'pemesananData', 'transaksi', 'pengguna', 'jenis_mobil'));
    }
}
