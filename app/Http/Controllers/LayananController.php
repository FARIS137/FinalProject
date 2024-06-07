<?php

namespace App\Http\Controllers;

use App\Models\Layanan;


use Illuminate\Http\Request;

class LayananController extends Controller
{
    //
    public function index()
    {
        //
        $layanan = Layanan::all();
        return view('admin.layanan.index', compact('layanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $ar_layanan = Layanan::all();
        return view('admin.layanan.create', compact('ar_layanan'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi
        $request->validate(
            [
                'jenis_layanan' => 'required',
                'deskripsi' => 'required',
            ],
            [
                'jenis_layanan.required' => 'Jenis Layanan Wajib diisi',
                'deskripsi.required' => 'Deskripsi Wajib diisi',
            ]

        );



        $layanan = new layanan;
        $layanan->jenis_layanan = $request->jenis_layanan;
        $layanan->harga = $request->harga;
        $layanan->deskripsi = $request->deskripsi;
        $layanan->save();
        return redirect('admin/layanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $layanan = Layanan::find($id);
        return view('admin.layanan.detail', compact('layanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $la = Layanan::find($id);
    $services = Layanan::all(); // Fetch all services
    return view('admin.layanan.edit', compact('la', 'services'));
}
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //


        //tambah data menggunakan eloquent
        $layanan = Layanan::find($id);
        $layanan->jenis_layanan = $request->jenis_layanan;
        $layanan->harga = $request->harga;
        $layanan->deskripsi = $request->deskripsi;
        $layanan->save();
        return redirect('admin/layanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $layanan = Layanan::find($id);
        $layanan->delete();

        return redirect('admin/layanan');
    }
}
