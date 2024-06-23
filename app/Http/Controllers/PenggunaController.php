<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class PenggunaController extends Controller
{
    //
    public function index()
    {
        //
        $pengguna = Pengguna::all();
        return view('admin.pengguna.index', compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $pengguna = Pengguna::all()->unique('hak_akses');
        return view('admin.pengguna.create', compact('pengguna'));
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
                'username' => 'required|max:50',
                'password' => 'required|unique:pengguna|max:10',
                'email' => 'required|unique:pengguna',
                'foto' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'hak_akses' => 'required'
            ],
            [
                'username.required' => 'Nama wajib diisi',
                'username.max' => 'Nama maksimal 50 kata',
                'password.max' => 'Password maxsimal 10 karakter',
                'password.required' => 'Password wajib diisi',
                'password.unique' => 'Password tidak boleh sama',
                'email.unique' => 'Email tidak boleh sama',
                'email.required' => 'Email wajib diisi',
                'foto.max' => 'Foto maxsimal 2 MB',
                'foto.mimes' => 'File ekstensi hanya bisa jpg,png,jpeg,gif,svg',
                'hak_akses.required' => 'Wajib diisi salah satu',
            ]

        );


        $pengguna = new Pengguna;
        $pengguna->username = $request->username;
        $pengguna->password = $request->password;
        $pengguna->email = $request->email;
        $pengguna->hak_akses = $request->hak_akses;
        $pengguna->save();
        Alert::success('Tambah User', 'Berhasil Tambah User');
        return redirect('admin/pengguna');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $pengguna = Pengguna::find($id);
        return view('admin.pengguna.detail', compact('pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $us = Pengguna::find($id);
        $pengguna = Pengguna::all()->unique('hak_akses');
        return view('admin.pengguna.edit', compact('us', 'pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //foto lama 
        $fotoLama = Pengguna::select('foto')->where('id', $id)->get();
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
        $pengguna = Pengguna::find($id);
        $pengguna->username = $request->username;
        $pengguna->password = $request->password;
        $pengguna->email = $request->email;
        $pengguna->hak_akses = $request->hak_akses;
        $pengguna->foto = $fileName;
        $pengguna->save();
        Alert::success('Update User', 'Berhasil Update User');
        return redirect('admin/pengguna');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $pengguna = Pengguna::find($id);
        $pengguna->delete();

        return redirect('admin/pengguna');
    }
}