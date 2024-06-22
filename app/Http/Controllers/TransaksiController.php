<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Pemesanan;




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
        $pemesanan = Pemesanan::all();
        return view('admin.transaksi.create', compact('pemesanan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'tanggal_transaksi' => 'required|date',
            'metode_pembayaran' => 'required|string',
            'bukti_bayar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'total_biaya' => 'required|numeric',
        ]);

        // Initialize a new Transaksi object
        $transaksi = new Transaksi;
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->metode_pembayaran = $request->metode_pembayaran;
        $transaksi->pemesanan_id = $request->pemesanan_id;

        // Handle file upload for bukti_bayar
        if ($request->hasFile('bukti_bayar')) {
            $fileName = 'foto-' . time() . '.' . $request->bukti_bayar->extension();
            $request->bukti_bayar->move(public_path('admin/image'), $fileName);
            $transaksi->bukti_bayar = $fileName;
        } else {
            $transaksi->bukti_bayar = null;
        }

        $transaksi->total_biaya = $request->total_biaya;
        $transaksi->save();
        return redirect('admin/transaksi');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $transaksi = Transaksi::find($id);
        return view('admin.transaksi.detail', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $tr = Transaksi::find($id);
        $transaksi = Transaksi::all();
        return view('admin.transaksi.edit', compact('tr', 'transaksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $fotoLama = Transaksi::select('bukti_bayar')->where('id', $id)->get();
        foreach ($fotoLama as $f1) {
            $fotoLama = $f1->bukti_bayar;
        }
        //jika foto sudah ada yang terupload 
        if (!empty($request->bukti_bayar)) {
            //maka proses selanjutnya 
            if (!empty($fotoLama->bukti_bayar)) unlink(public_path('admin/image' . $fotoLama->bukti_bayar));
            //proses ganti foto
            $fileName = 'foto-' . $request->id . '.' . $request->bukti_bayar->extension();
            //setelah tau fotonya sudah masuk maka tempatkan ke public
            $request->bukti_bayar->move(public_path('admin/image'), $fileName);
        } else {
            $fileName = $fotoLama;
        }

        $transaksi = Transaksi::find($id);
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->metode_pembayaran = $request->metode_pembayaran;
        $transaksi->pemesanan_id = $request->pemesanan_id;
        $transaksi->total_biaya = $request->total_biaya;
        $transaksi->bukti_bayar = $fileName;
        $transaksi->save();
        return redirect('admin/transaksi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $transaksi = Transaksi::find($id);
        $transaksi->delete();

        return redirect('admin/transaksi');
    }
}
