<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Layanan;


class PemesananController extends Controller
{
    //
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
        return view('admin.pemesanan.create', compact('layanan'));
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
        $pemesanan->noplat_mobil = $request->noplat_mobil;
        $pemesanan->customer_name = $request->customer_name;
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
        $pemesanan = Pemesanan::find($id);
        return view('admin.pemesanan.detail', compact('pemesanan'));
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
