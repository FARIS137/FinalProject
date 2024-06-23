<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Pemesanan;




class TransaksiController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::where('status', 'success')->get();
        return view('admin.transaksi.index', compact('pemesanan'));
    }
}