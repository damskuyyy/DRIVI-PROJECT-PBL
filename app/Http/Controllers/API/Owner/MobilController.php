<?php

namespace App\Http\Controllers\API\Owner;

use App\Http\Controllers\Controller;
use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index()
    {
        $mobil = Mobil::all();
        return response()->json($mobil, 200);
    }

    public function add(Request $request)
    {
        $validateData = $request->validate([
            'id_detail_owner' => 'required',
            'nama_mobil' => 'required',
            'jenis_mobil' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'jumlah_kursi' => 'required',
            'bahan_bakar' => 'required',
            'jenis_transmisi' => 'required',
        ]);

        // create user
        $mobil = new Mobil([
            'id_detail_owner' =>  $request->id_detail_owner,
            'nama_mobil' =>  $request->nama_mobil,
            'jenis_mobil' =>  $request->jenis_mobil,
            'harga' =>  $request->harga,
            'deskripsi' =>  $request->deskripsi,
            'jumlah_kursi' =>  $request->jumlah_kursi,
            'bahan_bakar' =>  $request->bahan_bakar,
            'jenis_transmisi' =>  $request->jenis_transmisi,
        ]);

        $mobil->save();

        return response()->json($mobil, 201);
    }
}
