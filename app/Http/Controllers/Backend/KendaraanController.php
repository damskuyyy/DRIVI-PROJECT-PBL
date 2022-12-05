<?php

namespace App\Http\Controllers\Backend;

use App\Models\Kendaraan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function KendaraanView()
    {
        // $allDataUser = User::all();
        $data['allDataKendaraan'] = Kendaraan::all();
        return view('backend.kendaraan.view_kendaraan', $data);
    }

    public function KendaraanAdd(){
        //    $data['allDataUser']=User::all();
           return view('backend.kendaraan.add_kendaraan');
    }

    public function kendaraanStore(Request $request){
        $validateData=$request->validate([
            'textnomorPlat'=>'required',
        ]);

        $data= new Kendaraan();
        $data->nomorPlat=$request->textnomorPlat;
        $data->namaKendaraan=$request->textnamaKendaraan;
        $data->save();


        return redirect()->route('kendaraan.view')->with('info','Tambah Kendaraan berhasil');
    }

}
