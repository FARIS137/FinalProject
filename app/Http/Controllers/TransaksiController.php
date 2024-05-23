<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\layanan;

class TransaksiController extends Controller
{
    //
    public function index()
    {
        //
        $transaksi = Transaksi::all();
        return view('admin.transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaksi = Transaksi::find($id);
        $pemesanan = $transaksi->pemesanan;

        // Mengambil data layanan berdasarkan layanan_id dari pemesanan
        $layanan = Layanan::find($pemesanan->layanan_id);
        $transaksi->noplat_mobil = $pemesanan->noplat_mobil;
        if ($layanan) {
            $transaksi->diskripsi = $layanan->deskripsi;
        } else {
            $transaksi->diskripsi = 'Deskripsi layanan tidak ditemukan';
        }

        return view('admin.transaksi.detail', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
