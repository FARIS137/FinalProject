<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\layanan;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\LayananResource;
use Illuminate\Support\Facades\Validator;

class LayananController extends Controller
{
    public function index(){
        $layanan = Layanan::all();
       return new LayananResource(true, 'List Data layanan', $layanan);
    }

    public function show($id){
        $layanan = Layanan::where('layanan.id', $id)
        ->first();
        if($layanan){
            return new LayananResource(true, 'Detail Data Layanan', $layanan);
        } else {
        return response()->json([
            'success'=>false,
            'message'=>'Layanan Tidak ditemukan',
        ], 404);
        }
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'jenis_layanan' => 'required|max:50',
            'harga'         => 'required|numeric',
            'deskripsi'     => 'required|max:250',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        $layanan = Layanan::create([
            'jenis_layanan' => $request->jenis_layanan,
            'harga'         => $request->harga,
            'deskripsi'     => $request->deskripsi,
            'created_at'    => $request->created_at
        ]);
        return new LayananResource(true, 'Data layanan berhasil ditambah', $layanan);
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(),[
            'jenis_layanan' => 'required|max:50',
            'harga'         => 'required|numeric',
            'deskripsi'     => 'required|max:250',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        $layanan = Layanan::create([
            'jenis_layanan' => $request->jenis_layanan,
            'harga'         => $request->harga,
            'deskripsi'     => $request->deskripsi,
            'created_at'    => $request->created_at
        ]);
        return new LayananResource(true, 'Data layanan berhasil diupdate', $layanan);
    }

    public function destroy($id){
        $layanan = Layanan::whereId($id)->first();
        $layanan->delete();
        return new LayananResource(true, 'Data layanan berhasil dihapus', $layanan);
    }
}