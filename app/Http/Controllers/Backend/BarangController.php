<?php

namespace App\Http\Controllers\backend;
use App\Models\Barang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function barangView()
    {
        // $allDataUser = User::all();
        $data['allDataBarang'] = Barang::all();
        return view('backend.barang.view_barang', $data);
    }

    public function BarangAdd(){
        //    $data['allDataUser']=User::all();
           return view('backend.barang.add_barang');
    }

    public function barangStore(Request $request){
        $validateData=$request->validate([
            'textNama'=>'required',
        ]);

        $data= new Barang();
        $data->nama=$request->textNama;
        $data->harga=$request->textHarga;
        $data->jumlah=$request->textJumlah;
        $data->save();


        return redirect()->route('barang.view')->with('info','Tambah barang berhasil');
    }

}