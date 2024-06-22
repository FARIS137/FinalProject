<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Http\Resources\PemesananResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use DB;


class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::join('layanan', 'layanan_id', '=', 'layanan.id')
            ->select('pemesanan.*', 'pemesanan.customer_name as nama')
            ->get();
        return new PemesananResource(true, 'List Data pemesanan', $pemesanan);
    }

    public function show($id)
    {
        $pemesanan = Pemesanan::join('layanan', 'layanan_id', '=', 'layanan.id')
            ->select('pemesanan.*', 'pemesanan.customer_name as nama')
            ->where('pemesanan.id', $id)
            ->first();
        if ($pemesanan) {
            return new PemesananResource(true, 'Detail Data Pemesanan', $pemesanan);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Produk Tidak ditemukan',
            ], 404);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tanggal_awal_booking' => 'required',
            'jam_awal_booking' => 'required',
            'noplat_mobil' => 'required',
            'layanan_id' => 'required',
            'customer_name' => 'required',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('public/foto');
        } else {
            $path = null;
        }

        $pemesanan = Pemesanan::create([
            'tanggal_awal_booking' => $request->tanggal_awal_booking,
            'jam_awal_booking' => $request->jam_awal_booking,
            'catatan' => $request->catatan,
            'jenis_mobil' => $request->jenis_mobil,
            'noplat_mobil' => $request->noplat_mobil,
            'customer_name' => $request->customer_name,
            'layanan_id' => $request->layanan_id,
            'foto' => $path,
        ]);

        return new PemesananResource(true, 'Data pemesanan berhasil ditambahkan', $pemesanan);
    }

    public function destroy($id)
    {
        $pemesanan = Pemesanan::whereId($id)->first();
        if ($pemesanan) {
            $pemesanan->delete();
            return new PemesananResource(true, 'Data pemesanan berhasil dihapus', $pemesanan);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Pemesanan Tidak ditemukan',
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'tanggal_awal_booking' => 'required',
            'jam_awal_booking' => 'required',
            'noplat_mobil' => 'required',
            'layanan_id' => 'required',
            'customer_name' => 'required',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $pemesanan = Pemesanan::whereId($id)->update([
            'tanggal_awal_booking' => $request->tanggal_awal_booking,
            'jam_awal_booking' => $request->jam_awal_booking,
            'catatan' => $request->catatan,
            'jenis_mobil' => $request->jenis_mobil,
            'noplat_mobil' => $request->noplat_mobil,
            'customer_name' => $request->customer_name,
            'layanan_id' => $request->layanan_id,
            'foto' => $path,
        ]);

        return new PemesananResource(true, 'Data pemesanan berhasil diubah', $pemesanan);
    }
}
