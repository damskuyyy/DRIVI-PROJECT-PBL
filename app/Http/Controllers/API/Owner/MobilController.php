<?php

namespace App\Http\Controllers\API\Owner;

use App\Http\Controllers\Controller;
use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MobilController extends Controller
{
    // view all
    public function MobilView()
    {
        $user = Auth::user();
        $mobil = Mobil::id_user();
        return response()->json($mobil, 200);
    }

    // add
    public function MobilAdd(Request $request)
    {
        $validateData = $request->validate([
            
            'user_id' => 'required',
            'nama_mobil' => 'required',
            'jenis_mobil' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'jumlah_kursi' => 'required',
            'bahan_bakar' => 'required',
            'jenis_transmisi' => 'required',
        ]);

        $mobil = new Mobil([
            // 'id_user' = Auth::user()->id;
            'user_id' =>  $request->user_id,
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

    // update
    public function MobilUpdate(Request $request, $id)
    {
        $mobil = mobil::find($id);
        $mobil-> user_id = $request->input('user_id');
        $mobil-> nama_mobil = $request->input('nama_mobil');
        $mobil-> jenis_mobil = $request->input('jenis_mobil');
        $mobil-> harga = $request->input('harga');
        $mobil-> deskripsi = $request->input('deskripsi');
        $mobil-> jumlah_kursi = $request->input('jumlah_kursi');
        $mobil-> bahan_bakar = $request->input('bahan_bakar');
        $mobil-> jenis_transmisi = $request->input('jenis_transmisi');
        $mobil->save();

        return response()->json($mobil, 201);
    }

    public function MobilDelete(Request $request, $id){
        $mobil=mobil::find($id);
        $mobil->delete();
        return response()->json($mobil, 201);
    }
}
