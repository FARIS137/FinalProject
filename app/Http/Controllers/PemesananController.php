<?php

namespace App\Http\Controllers;
use App\Models\Pemesanan;
use App\Models\Layanan;

use Illuminate\Http\Request;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pemesanan = Pemesanan::all();
        return view('admin.pemesanan.index', compact('pemesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $layanan = Layanan::all();
        $jenis_mobil = ['biasa', 'sport'];
        return view ('admin.pemesanan.create', compact('layanan', 'jenis_mobil'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $pemesanan = new Pemesanan;
        $pemesanan->tanggal_awal_booking = $request->tanggal_awal_booking;
        $pemesanan->jam_awal_booking = $request->jam_awal_booking;
        $pemesanan->catatan = $request->catatan;
        $pemesanan->jenis_mobil = $request->jenis_mobil;
        $pemesanan->noplat_mobil = $request->noplat_mobil;
        $pemesanan->layanan_id = $request->layanan_id;
        $pemesanan->save();
        return redirect('admin/pemesanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
