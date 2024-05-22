<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;


class UsersController extends Controller
{
    //
    public function index()
    {
        //
        $users = Users::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $users = Users::all()->unique('hak_akses');
        return view('admin.users.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $users = new Users;
        $users->username = $request->username;
        $users->password = $request->password;
        $users->email = $request->email;
        $users->hak_akses = $request->hak_akses;
        $users->save();
        return redirect('admin/users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $users = Users::find($id);
        return view('admin.users.detail', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $us = Users::find($id);
        $users = Users::all()->unique('hak_akses');
        return view('admin.users.edit', compact('us', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //foto lama 
        $fotoLama = Users::select('foto')->where('id', $id)->get();
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
        $users = Users::find($id);
        $users->username = $request->username;
        $users->password = $request->password;
        $users->email = $request->email;
        $users->hak_akses = $request->hak_akses;
        $users->foto = $fileName;
        $users->save();
        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
