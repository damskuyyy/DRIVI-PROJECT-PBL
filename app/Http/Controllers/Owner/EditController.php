<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Mobil;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function mobilEdit($id){
        // dd('berhasil edit');
        $editData=Mobil::find($id);
        return view('owner.edit_mobil', compact('editData'));
       }

       public function mobilUpdate(Request $request, $id){

        
        $mobil= Mobil::find($id);
        // $mobil->user_id=$user_id->id;
        $mobil->nama_mobil=$request->nama_mobil;
        $mobil->jenis_mobil=$request->jenis_mobil;
        $mobil->harga=$request->harga;
        $mobil->deskripsi=$request->deskripsi;
        $mobil->jumlah_kursi=$request->jumlah_kursi;
        $mobil->bahan_bakar=$request->bahan_bakar;
        $mobil->jenis_transmisi=$request->jenis_transmisi;
        // $mobil->mobil_photo_path=$request->mobil_photo_path;
        // if($request->password!=""){
        //     $data->password=bcrypt($request->password);
        // }
        $mobil->save();


        return redirect()->route('owner.list')->with('fire','Edit mobil berhasil');
    }
}
