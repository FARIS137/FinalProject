<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Layanan;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::where("status", "1")->get();
        return view('admin.pemesanan.index', compact('pemesanan'));
    }
    
    public function pembayaran(Request $request){
        $id = $request->input("id");

        if(empty($id)){
            return redirect("booking")->with(["error" => "Id Tidak Tersedia"]);
        }
        
        $pemesanan = Pemesanan::where('id', $id)->first();
        
        return view('front.pembayaran', compact('pemesanan'));
    }

    public function data(Request $request){
                                                                                                                                                            
        $dataBaru = [
            'tanggal_awal_booking' => $request->tanggal_awal_booking,
            'jam_awal_booking'     => $request->jam_awal_booking,
            'catatan'              => $request->catatan,
            'jenis_mobil'          => $request->jenis_mobil,
            'noplat_mobil'         => $request->noplat_mobil,
            'layanan_id'           => $request->layanan_id,
            'customer_name'        => $request->customer_name,
        ];

        $harga = "";

        if($dataBaru["layanan_id"] == "regular"){
            $harga = 55000;
        } else if($dataBaru["layanan_id"] == "drywash"){
            $harga = 75000;
        } else if($dataBaru["layanan_id"] == "medium"){
            $harga = 125000;
        } else if($dataBaru["layanan_id"] == "complete"){
            $harga = 220000;
        } else {
            $harga = 0;
        }
        $dataBaru["harga"] = $harga;

        if($dataBaru["jenis_mobil"] == "sport"){
            $totalHarga = $harga + 30000;
        } else if($dataBaru["jenis_mobil"] == "biasa"){
            $totalHarga = $harga + 0;
        }
        $dataBaru["total_harga"] = $totalHarga;
        $pemesanan = Pemesanan::create($dataBaru);
        $pemesanan->save();
        return redirect('pembayaran?id=' . $pemesanan["id"]);
    }

    public function bukti_pembayaran(Request $request){
        $id = $request->id;
        
        if ($request->hasFile('bukti')) {
            $fileName = 'foto-' . time() . '.' . $request->bukti->extension();
            $request->bukti->move(public_path('admin/image'), $fileName);

            $dataBaru = [
                "foto"   => $fileName,
                "status" => "1"
            ];
            
            $pemesanan = Pemesanan::where("id", $id)->update($dataBaru);

            return redirect("home")->with(["bukti_pembayaran" => "pembayaran berhasil"]);
        } else {
            return redirect("konfirmasi?id=" . $id);
        }
    }

    public function konfirmasi(Request $request) {
        $id = $request->input("id");

        if(empty($id)){
            return redirect("booking")->with(["error" => "Id Tidak Tersedia"]);
        }
        
        $pemesanan = Pemesanan::where('id', $id)->first();

        $data = [
            "pemesanan" => $pemesanan
        ];
        
        return view('/front/konfirmasi', $data);
    }

    public function method(Request $request){
        $method = $request->method;
        $norek  = rand(1,100000000000000000);
        $id  = $request->id;

        $dataBaru = [
            "method" => $method,
            "norek"  => $norek
        ];
        
        $pemesanan = Pemesanan::where("id", $id)->update($dataBaru);

        return redirect('/konfirmasi?id=' . $id);
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