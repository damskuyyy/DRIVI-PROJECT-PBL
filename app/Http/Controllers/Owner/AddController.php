<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddController extends Controller
{
    public function add(){
        $user_id = Auth::user();
        return view('owner.add_mobil', compact('user_id'));
    }

    public function mobilStore(Request $request){
        $user_id = Auth::user();
        // nama fiel sesuai yang di setup
        $extension = $request->file('photo')->getClientOriginalExtension(); //mengambil extensi asli file
        $newName = $request->nama_mobil.'-'.now()->timestamp.'.'.$extension;  //rename file
        $request->file('photo')->storeAs('public', $newName); //path file

        // nama file random
        // return $path = $request->file('photo')->store('mobil'); //nama file random
        $validateData = $request->validate([
            
            // 'user_id' => 'required',
            'nama_mobil' => 'required',
            'jenis_mobil' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'jumlah_kursi' => 'required',
            'bahan_bakar' => 'required',
            'jenis_transmisi' => 'required',
            'photo' => 'required',
        ]);


        $mobil= new Mobil();
        $mobil->user_id=$user_id->id;
        $mobil->nama_mobil=$request->nama_mobil;
        $mobil->jenis_mobil=$request->jenis_mobil;
        $mobil->harga=$request->harga;
        $mobil->deskripsi=$request->deskripsi;
        $mobil->jumlah_kursi=$request->jumlah_kursi;
        $mobil->bahan_bakar=$request->bahan_bakar;
        $mobil->jenis_transmisi=$request->jenis_transmisi;
        $mobil->mobil_photo_path=$newName;
        
        $mobil->save();


        return redirect()->route('owner.list');
    
    }
}
