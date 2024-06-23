<?php

namespace App\Http\Controllers;


use App\Models\Pemesanan;
use App\Models\Layanan;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create()
    {
        $layanan = Layanan::all(); // Mengambil semua data layanan
        return view('front.booking', compact('layanan')); // Mengirimkan data layanan ke view
    }
    public function submitBooking(Request $request)
    {
        // Validasi input form
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string',
            'tanggal_booking' => 'required|date',
            'jam_booking' => 'required',
            'layanan_id' => 'required|exists:layanan,id', // pastikan layanan_id ada di tabel layanan
            'no_plat' => 'required|string',
            'jenis_mobil' => 'required',
            'catatan' => 'nullable|string',
        ]);

        // Simpan data ke dalam tabel pemesanan
        $pemesanan = new Pemesanan();
        $pemesanan->customer_name = $request->nama_lengkap;
        $pemesanan->tanggal_awal_booking = $request->tanggal_booking;
        $pemesanan->jam_awal_booking = $request->jam_booking;
        $pemesanan->jenis_mobil = $request->jenis_mobil;
        $pemesanan->noplat_mobil = $request->no_plat;
        $pemesanan->layanan_id = $request->layanan_id; // Mengambil layanan_id dari form
        $pemesanan->catatan = $request->catatan;
        $pemesanan->save();

        // Redirect ke halaman pembayaran dengan mengirim ID pemesanan
        return redirect()->route('pembayaran', ['id' => $pemesanan->id]);
    }


    public function showPembayaran($id)
    {
        $pemesanan = Pemesanan::with('layanan')->findOrFail($id);

        // Logika untuk menghitung biaya tambahan jika mobil adalah mobil sport
        $additionalCost = 0;
        if ($pemesanan->jenis_mobil === 'sport') {
            $additionalCost = 30000; // Biaya tambahan untuk mobil sport
        }
    
        // Hitung total harga
        $totalHarga = $pemesanan->layanan->harga + $additionalCost;
    
        // Tampilkan halaman pembayaran dengan data pemesanan
        return view('front.pembayaran', compact('pemesanan', 'additionalCost', 'totalHarga'));
    }
}