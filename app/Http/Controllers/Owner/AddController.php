<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddController extends Controller
{
    public function add(){
        return view('owner.add_mobil');
    }

    public function mobilStore(Request $request, $id_user){
        $validateData = $request->validate([
            
            'id_user' => 'required',
            'nama_mobil' => 'required',
            'jenis_mobil' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'jumlah_kursi' => 'required',
            'bahan_bakar' => 'required',
            'jenis_transmisi' => 'required',
        ]);

        $mobil = new Mobil([
            Auth::user()->id,
            'nama_mobil' =>  $request->nama_mobil,
            'jenis_mobil' =>  $request->jenis_mobil,
            'harga' =>  $request->harga,
            'deskripsi' =>  $request->deskripsi,
            'jumlah_kursi' =>  $request->jumlah_kursi,
            'bahan_bakar' =>  $request->bahan_bakar,
            'jenis_transmisi' =>  $request->jenis_transmisi,
           
        ]);
       
        $mobil->save();

        dd($mobil);
        return redirect()->route('owner.list')->with('info','Tambah user berhasil');
    }
}
