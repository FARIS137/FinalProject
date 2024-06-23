<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiPem;
use App\Models\Pemesanan;

class TransaksiPemController extends Controller
{
    public function index()
    {
        $data = Transaksipem::all();
        return view('admin.transaksipem.index', compact('data'));
    }

    public function show($id)
    {
        $data = Transaksipem::findOrFail($id);
        return view('admin.transaksipem.show', compact('data'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'metode_pembayaran' => 'required|string',
            'total_harga' => 'required|numeric',
            'harga' => 'required|numeric',
            'tanggal_awal_booking' => 'required|date',
            'jam_awal_booking' => 'required|date_format:H:i:s',
            'catatan' => 'nullable|string',
            'jenis_mobil' => 'required|string',
            'noplat_mobil' => 'required|string',
            'customer_name' => 'required|string',
            'layanan_id' => 'required|integer',
            // 'pemesanan_id' => 'required|integer',
        ]);


            $transaksipem = TransaksiPem::create([
             'customer_name' => $request->customer_name,
            'tanggal_awal_booking' => $request->tanggal_awal_booking,
            'jam_awal_booking' => $request->jam_awal_booking,
            'jenis_mobil' => $request->jenis_mobil,
            'noplat_mobil' => $request->noplat_mobil,
            'layanan_id' => $request->layanan_id,
            'catatan' => $request->catatan,
            // 'pemesanan_id' => $request->pemesanan_id,
            'metode_pembayaran' => $request->metode_pembayaran,
            'total_harga' => $request->total_harga,
            'harga' => $request->harga,
            ]);
            

            return redirect()->route('home', ['id' => $transaksipem]);
        
    }
}
