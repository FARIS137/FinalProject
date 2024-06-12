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

        $jenis_mobil = ['biasa', 'sport'];
        $layanan = Layanan::all();
        return view('admin.pemesanan.create', compact('layanan', 'jenis_mobil'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //validasi
        $request->validate(
            [
                'tanggal_awal_waktu' => 'required',
                'jam_awal_booking' => 'required',
                'noplat_mobil' => 'required',
                'layanan_id' => 'required',
                'customer_name' => 'required',
                'foto' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ],
            [
                'tanggal_awal_waktu.required' => 'Tanggal awal waktu Wajib diisi',
                'jam_awal_booking.required' => 'Jam awal booking Wajib diisi',
                'noplat_mobil.required' => 'Noplat mobil Wajib diisi',
                'layanan_id.required' => 'Layanan Wajib diisi',
                'customer_name.required' => 'Nama Wajib diisi',
                'foto.max' => 'Foto maxsimal 2 MB',
                'foto.mimes' => 'File ekstensi hanya bisa jpg,png,jpeg,gif,svg',
            ]

        );


        $pemesanan = new Pemesanan;
        $pemesanan->tanggal_awal_booking = $request->tanggal_awal_booking;
        $pemesanan->jam_awal_booking = $request->jam_awal_booking;
        $pemesanan->catatan = $request->catatan;
        $pemesanan->jenis_mobil = $request->jenis_mobil;
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
        $layanan = Layanan::all();
        $ps = Pemesanan::find($id);
        $jenis_mobil = ['biasa', 'sport'];
        return view('admin.pemesanan.edit', compact('layanan', 'ps', 'jenis_mobil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $fotoLama = Pemesanan::select('foto')->where('id', $id)->get();
        foreach ($fotoLama as $f1) {
            $fotoLama = $f1->foto;
        }
        //jika foto sudah ada yang terupload 
        if (!empty($request->foto)) {
            //maka proses selanjutnya 
            if (!empty($fotoLama->foto)) unlink(public_path('admin/image' . $fotoLama->foto));
            //proses ganti foto
            $fileName = 'foto-' . $request->id . '.' . $request->foto->extension();
            //setelah tau fotonya sudah masuk maka tempatkan ke public
            $request->foto->move(public_path('admin/image'), $fileName);
        } else {
            $fileName = $fotoLama;
        }
        //tambah data menggunakan eloquent
        $pemesanan = Pemesanan::find($id);
        $pemesanan->tanggal_awal_booking = $request->tanggal_awal_booking;
        $pemesanan->jam_awal_booking = $request->jam_awal_booking;
        $pemesanan->catatan = $request->catatan;
        $pemesanan->jenis_mobil = $request->jenis_mobil;
        $pemesanan->noplat_mobil = $request->noplat_mobil;
        $pemesanan->customer_name = $request->customer_name;
        $pemesanan->layanan_id = $request->layanan_id;
        $pemesanan->foto = $fileName;
        $pemesanan->save();
        return redirect('admin/pemesanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pemesanan = Pemesanan::find($id);
        $pemesanan->delete();

        return redirect('admin/pemesanan');
    }
}
